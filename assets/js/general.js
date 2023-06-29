"use strict";
const $j = require('jquery').noConflict(true);
import MarkerClusterer from '@googlemaps/markerclustererplus';


(function ($) {
    require("bootstrap");
    require("jquery-mousewheel");

    const lightbox = require('./lightbox.js');


    var deparam = require('jquery-deparam');
    var _ = require('lodash');
    /*-----------------------------------------------------------*/

    //var filterObject = {};
    //var page = 1;
    //var generalObject = {}
    var jobStars = {};
    let map,
        jobMapMarkers,
        visibleJobMapMarkers,
        markerClusterer;

    var screencheck = function (mediasize) {
        if (typeof window.matchMedia !== "undefined") {
            var screensize = window.matchMedia("(max-width:" + mediasize + "px)");
            if (screensize.matches) {
                return true;
            } else {
                return false;
            }
        } else { // for IE9 and lower browser
            if ($winW() <= mediasize) {
                return true;
            } else {
                return false;
            }
        }
    };

    initFilterObject();
    initJobStars();
    triggerFilterApi();
    initJobAgentRecaptcha();
    initJobMap();

    $("ul.sidebar__filter-list li ul").parent('li').addClass('sidebar__filter-multi-level');

    $(document).on('click', '.sidebar__filter-title', function () {
        var $this = $(this)
        $(this).toggleClass('sidebar__filter-title--open');
        $(this).next('.sidebar__filter-details').slideToggle('normal');
        setTimeout(function () {
            $this.find('.sidebar__filter-search-input').focus();
        }, 100);

        return false;
    });

    $(document).on('click', '.sidebar__filter-search', function (event) {
        event.stopPropagation();
    });

    $(".sidebar__filter-search .sidebar__filter-search-input").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(this).parents('.sidebar__filter-title').next(".sidebar__filter-details").find('ul li').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $(document).on('click', '.active-filter .cancel', function () {
        var $this = $(this),
            $parent = $this.parent('li'),
            filterId = $parent.data('filter-id'),
            $filterBlock = $this.parents('.sidebar__filter-block'),
            filterName = $filterBlock.data('filter'),
            $checkbox = $filterBlock.find('.sidebar__list-entry-check-input[value="' + filterId + '"]'),
            $wrapper = $checkbox.parent().parent(),
            checked = false;

        $parent.fadeOut(300, function () {
            $(this).remove();
        });

        $checkbox.prop({
            indeterminate: false,
            checked: checked
        })
            .prop('checked', checked).removeClass('sidebar__list-entry-check-input--checked');

        updateFilterObj(filterName, $checkbox.val(), 'remove');
        checkSiblings($wrapper, checked);
        triggerFilterApi();
        return false;
    });

    $(document).on('change', '.sidebar__list-entry-check .sidebar__list-entry-check-input', function () {
        handleCheckboxChange($(this));
        triggerFilterApi();
    });

    function updateFilterCounts(filterurl) {
        $.get(jobCountApiUrl + filterurl, function (data) {
            $('.sidebar__list-entry-count').text('0');

            for (let filterKey in data) {
                let $filterGroup = $('.sidebar__filter-block[data-filter="' + filterKey + '"]');

                if ($filterGroup.length > 0 && data.hasOwnProperty(filterKey)) {
                    data[filterKey].forEach(function (filterCount) {
                        updateFilterCount($filterGroup, filterCount['key'], filterCount['doc_count']);
                    });
                }
            }

            // remove filter entries with 0 results
            if (window.noEmptyFilters) {
                $('.sidebar__list-entry-count').each(function () {
                    if (parseInt($(this).text()) == 0) {
                        $(this).parent().css('display', 'none');
                    } else {
                        $(this).parent().css('display', 'list-item');
                    }
                });
            }
        });
    }

    function updateFilterCount($filterGroup, filterValue, filterCount) {
        let $filterElement = $filterGroup.find('input.sidebar__list-entry-check-input[value="' + filterValue + '"]'),
            $activeFilter = $filterGroup.find('.active-filter li[data-filter-id="' + filterValue + '"]');

        if ($filterElement.length > 0) {
            let $filterListElement = $filterElement.closest('.sidebar__list-entry'),
                $multiLevelListElement = $filterListElement.closest('.sidebar__list-entry.sidebar__filter-multi-level'),
                $filterCountElement = $filterListElement.find('.sidebar__list-entry-count'),
                $multiLevelCountElement = $multiLevelListElement.children('.sidebar__list-entry-count');

            if ($filterCountElement.length > 0) {
                $filterCountElement.text(filterCount);
            }

            if ($multiLevelCountElement.length > 0) {
                let multiCount = parseInt($multiLevelCountElement.text());
                $multiLevelCountElement.text(multiCount + parseInt(filterCount));
            }
        }

        if ($activeFilter.length > 0) {
            $activeFilter.find('.sidebar__list-entry-count').text(filterCount);
        }
    }

    $(document).on('click', '.card-header__job-star', function (event) {
        event.stopPropagation;
        var getnumber = $('.markit span span').text();
        var jobId = $(this).closest('.card').data('job-id');
        var getVal = parseInt(getnumber);
        if ($(this).hasClass('active')) {
            getVal--;
            delete jobStars[jobId];
        } else {
            getVal++;
            jobStars[jobId] = "saved";
        }
        $(this).toggleClass('active');
        $('.markit span span').text(getVal);
        saveJobStars();
        return false;
    });

    function initJobStars() {
        if (!localStorage.stars) {
            localStorage.stars = JSON.stringify(jobStars);
        } else {
            jobStars = JSON.parse(localStorage.stars);
            // Set number correctly on flag
            $('.markit span span').text(Object.keys(jobStars).length);
        }
        return true;
    }

    function saveJobStars() {
        console.log("saveJobStars");
        console.info(jobStars);
        localStorage.stars = JSON.stringify(jobStars);
    }

    $('.sidebar__filter-details li .sidebar__list-entry-title').next('ul').prev('.sidebar__list-entry-title').addClass('has-accordian');
    $(document).on('click', '.sidebar__filter-details li .sidebar__list-entry-title', function () {
        if ($(this).next('ul').is(':hidden')) {
            $(this).next('ul').addClass('accordian').slideDown('normal');
            return false;
        } else if (!$(this).hasClass('has-accordian')) {
            $(this).prev('.sidebar__list-entry-check').find('.sidebar__list-entry-check-input').trigger('click');
        }

        if ($(this).next('ul').hasClass('accordian')) {
            $(this).next('ul').slideUp('normal').removeClass('accordian');
            return false;
        }
    });


    $(window).on('resize', function () {
        if (screencheck(991)) {
            $('.grid-view').appendTo($('.filter-main-box > .container'));
        } else {
            $('.grid-view').prependTo($('.jobs__match-title'));
        }
    }).resize();

    $(document).on('click', '.filter-trigger, .filter-btn', function () {
        $('.sidebar').slideToggle('normal');
        return false;
    }).resize();

    $(document).on('click', '.accordion-heading span', function () {

        if ($(this).hasClass('card-header__active')) {
            $(this).toggleClass('card-header__changed');
            if ($(this).hasClass('card-header__changed')) {
                changeSortCriteria($(this).data('field'), 'ASC');
            } else {
                changeSortCriteria($(this).data('field'), 'DESC');
            }
        } else {
            $('.accordion-heading span').removeClass('card-header__active card-header__changed');
            $(this).addClass('card-header__active card-header__changed');
            changeSortCriteria($(this).data('field'), 'ASC');
        }
        return false;
    }).resize();

    /* Custom Scroll */
    $('.sidebar__filter-details').mCustomScrollbar({
        mouseWheel: {preventDefault: true},
        mouseWheelPixels: 50,
        axis: "y",
        scrollInertia: 70
    });

    $(document).on('click', 'nav li.page-item', function (event) {
        event.stopPropagation();
        var newPage = $(this).find('a').data('new-page');
        if (typeof newPage !== "undefined") {
            window.page = newPage
            triggerFilterApi();
        }
    });

    function changeSortCriteria(field, direction) {

        generalObject['sortitem'] = field;
        generalObject['sortdirection'] = direction;

        window.page = 1;

        triggerFilterApi();
    }

    function handleCheckboxChange($checkbox) {
        var checked = $checkbox.prop("checked"),
            $container = $checkbox.parent().parent(),
            $entries = $container.find('.sidebar__list-entry-check input[type="checkbox"]'),
            $filterBlock = $checkbox.parents('.sidebar__filter-block'),
            filterName = $filterBlock.data('filter'),
            $activeFilters = $filterBlock.find('.active-filter ul');

        $entries.prop({
            indeterminate: false,
            checked: checked
        })
            .removeClass('sidebar__list-entry-check-input--checked sidebar__list-entry-check-input--unchecked sidebar__list-entry-check-input--indeterminate')
            .addClass(checked ? 'sidebar__list-entry-check-input--checked' : 'sidebar__list-entry-check-input--unchecked');

        $entries.each(function () {
            updateFilterObj(filterName, $(this).val(), checked ? 'add' : 'remove');
        });

        checkSiblings($container, checked);

        $entries.each(function () {
            var $this = $(this),
                $exisitingFilter = $activeFilters.find('[data-filter-id="' + $this.val() + '"]');
            if ($this.val() !== "0") {
                if ($this.prop('checked')) {
                    if (!$exisitingFilter.length) {
                        var $wrapper = $this.parent().parent(),
                            name = $wrapper.find('> .sidebar__list-entry-title').text(),
                            count = $wrapper.find('> .sidebar__list-entry-count').text();

                        $activeFilters.append('<li data-filter-id="' + $this.val() + '"><span class="sidebar__list-entry-count">' + count + '</span><em>' + name + '</em><a href="#" class="cancel">cancel</a></li>');
                    }
                } else {
                    if ($exisitingFilter.length) {
                        $exisitingFilter.fadeOut(300, function () {
                            $(this).remove();
                        });
                    }
                }
            }
        });
    }

    function checkSiblings($el, checked) {

        var parent = $el.parent().parent(),
            all = true,
            indeterminate = false;

        $el.siblings().each(function () {
            return all = ($(this).find('.sidebar__list-entry-check input[type="checkbox"]').prop("checked") === checked);
        });

        if (all && checked) {

            parent.find('input[type="checkbox"]')
                .prop({
                    indeterminate: false,
                    checked: checked
                })
                .removeClass('sidebar__list-entry-check-input--checked sidebar__list-entry-check-input--unchecked sidebar__list-entry-check-input--indeterminate')
                .addClass(checked ? 'sidebar__list-entry-check-input--checked' : 'sidebar__list-entry-check-input--unchecked');

            checkSiblings(parent, checked);


        } else if (all && !checked) {

            indeterminate = parent.find('.sidebar__list-entry-check input[type="checkbox"]:checked').length > 0;
            parent.find('input[type="checkbox"]')
                .prop("checked", checked)
                .prop("indeterminate", indeterminate)
                .removeClass('sidebar__list-entry-check-input--checked sidebar__list-entry-check-input--unchecked sidebar__list-entry-check-input--indeterminate')
                .addClass(indeterminate ? 'sidebar__list-entry-check-input--indeterminate' : (checked ? 'sidebar__list-entry-check-input--checked' : 'sidebar__list-entry-check-input--unchecked'));

            checkSiblings(parent, checked);


        } else {

            $el.parents("li").find(' > .sidebar__list-entry-check input[type="checkbox"]')
                .prop({
                    indeterminate: true,
                    checked: false
                })
                .removeClass('sidebar__list-entry-check-input--checked sidebar__list-entry-check-input--unchecked sidebar__list-entry-check-input--indeterminate')
                .addClass('sidebar__list-entry-check-input--indeterminate');
        }
    }

    /* Add Code for search bar  */
    $('.search__col-input').change(searchBoxChanged);
    $('.search__col-input').keypress(searchBoxChanged);

    function searchBoxChanged(event) {
        if (event.type === 'change' || (event.type === 'keypress' && event.which === 13)) {
            event.preventDefault();
            if ($(this).val() === "") {
                delete (filterObject["keyword"]);
            } else {
                filterObject["keyword"] = $(this).val();
            }
            triggerFilterApi();

            return false;
        }
    }

    /* Add Search Button */
    $('.search-section input.button[type="submit"]').click(function (event) {
        event.preventDefault();
        triggerFilterApi();
        return false;
    });

    /**
     * Applies window.filterObject to the checkboxes.
     */
    function applyFilterObjectToCheckboxes(filters) {
        $.each(filters, function (key, values) {
            // get the corresponding filter block
            let $filterBlock = $('.sidebar__filter-block[data-filter="' + key + '"]');

            // if the filter block is found
            if ($filterBlock.length > 0) {

                if (!Array.isArray(values)) {
                    values = JSON.parse(values);
                }

                let removableValues = [];

                // there might be one or multiple filter values for a filter key, better loop over them
                $.each(values, function (_, value) {
                    // get the corresponding filter checkbox
                    let $checkbox = $filterBlock.find('.sidebar__list-entry-check input[value="' + value + '"]');

                    // if such a filter checkbox is found
                    if ($checkbox.length > 0) {
                        $checkbox.prop('checked', true);
                        handleCheckboxChange($checkbox);
                    } else {
                        removableValues.push(value);
                    }
                });

                $.each(removableValues, function (_, value) {
                    if (Array.isArray(window.filterObject[key])) {
                        let idx = window.filterObject[key].indexOf(value);

                        if (idx > -1) {
                            window.filterObject[key].splice(idx, 1);
                        }

                        if (window.filterObject[key].length === 0) {
                            delete window.filterObject[key];
                        }
                    } else {
                        delete window.filterObject[key];
                    }
                });
            }
        });
    }

    function initFilterObject() {
        // add default values to filterObject and generalObject
        window.generalObject = window.JbConfig.generalObject;
        window.filterObject = window.JbConfig.filterObject;

        $('.sidebar__filter-block').each(function () {
            var filter = $(this).data('filter');
            $(this).find('.sidebar__list-entry-check input[type="checkbox"]:checked').each(function () {
                updateFilterObj(filter, $(this).val(), 'add');
            })
        });

        // first apply widget params to filterObject
        if (window.predefinedSearchParams !== undefined && window.predefinedSearchParams.filter !== undefined) {
            // merge window.predefinedSearchParams.filter into window.filterObject
            applyFilterObjectToCheckboxes(window.predefinedSearchParams.filter);
        }

        // apply the new, extended filterObject to the checkboxes
        applyFilterObjectToCheckboxes(window.filterObject);
    }

    function updateFilterObj(filter, entry, action) {
        if (entry !== "0") {
            if (filterObject[filter] === undefined) {
                filterObject[filter] = [];
            }

            var entryPos = filterObject[filter].indexOf(entry);

            if (action === 'add') {
                if (entryPos === -1) {
                    filterObject[filter].push(entry);
                }
            } else if (action === 'remove') {
                if (entryPos !== -1) {
                    filterObject[filter].splice(entryPos, 1);
                    if (filterObject[filter].length === 0) {
                        delete filterObject[filter];
                    }
                }
            }

            window.page = 1;
        }
    }

    function triggerFilterApi() {
        if (typeof page == "undefined") {
            page = 1;
        }
        //generate the filterobj for the request
        try {
            var obj = filterObject;
            var res,
                keys = Object.keys(obj),
                values = Object.keys(obj).map(item => obj[item]),
                filterCount = 0;
            var gen = generalObject;

            gen['format'] = 'cards';
            //init with empty string
            var filterurl = "";

            //If gen is an object (why)
            if (gen && gen.constructor === Object) {
                var keysGen = Object.keys(gen),
                    valuesGen = Object.keys(gen).map(item => gen[item]);

                for (var i = 0, l = keysGen.length; i < l; i++) {
                    filterurl.indexOf("?") == -1 ? filterurl += "?" : filterurl += "&";
                    if (valuesGen[i].constructor === Array) {
                        filterurl += "" + encodeURIComponent(keysGen[i]) + "=[" + encodeURIComponent(valuesGen[i].join(',')) + "]";
                    } else {
                        filterurl += "" + encodeURIComponent(keysGen[i]) + "=" + encodeURIComponent(valuesGen[i]);
                    }
                }
            }

            //generate each filter prop for the query
            for (var i = 0, l = keys.length; i < l; i++) {

                filterurl.indexOf("?") == -1 ? filterurl += "?" : filterurl += "&";
                if (keys[i] == "keyword") {
                    //Keywords are special
                    filterurl += "keyword=" + encodeURIComponent(values[i]);
                } else {
                    if (values[i].constructor === Array) {
                        filterurl += "filter[" + encodeURIComponent(keys[i]) + "]=[" + encodeURIComponent(values[i].join(',')) + "]";
                        filterCount += values[i].length;
                    } else {
                        filterurl += "filter[" + encodeURIComponent(keys[i]) + "]=" + encodeURIComponent(values[i]);
                    }
                }
            }

            var similarJobFilterUrl = filterurl;

            if (gen['sortitem'] !== undefined && gen['sortdirection'] !== undefined) {
                if (filterurl === '') {
                    filterurl += '?sort[' + gen['sortitem'] + ']=' + gen['sortdirection'];
                } else {
                    filterurl += '&sort[' + gen['sortitem'] + ']=' + gen['sortdirection'];
                }
            }

            if (filterurl === '') {
                filterurl += "?" + pageFilter(page);
            } else {
                filterurl += "&" + pageFilter(page);
            }

            if (window.generalObject.widget === true) {
                filterurl += '&widget=1';
            }

            if (filterCount > 0) {
                $('.filter-trigger .filter-count').removeClass('filter-count__no-filters');
            } else {
                $('.filter-trigger .filter-count').addClass('filter-count__no-filters');
            }
            $('.filter-trigger .filter-count').text(filterCount);

            $.get(widgetApiUrl + filterurl, function (data) {
                loadJobMapMarkers(filterurl);

                $('#jobs-accordion .card').remove();
                $('.jobs__match-title').remove();
                $('.accordion-heading').remove();
                $('nav[aria-label="Page navigation"]').remove();
                $('.loader').after(data);

                Object.keys(jobStars).forEach(function (key) {
                    $('.card[data-job-id="' + key + '"]').find('.card-header__job-star ').addClass('active')
                });

                updateFilterCounts(filterurl);

                lightbox.lightbox($);

                // similarjobs need filter
                $('.job-link-open').each(function () {
                    var tmpUrl = $(this).attr('href');
                    $(this).attr('href', tmpUrl + similarJobFilterUrl);
                });
            });
        } catch (e) {
            throw e;
        }
    }

    function pageFilter(number) {
        //add the page number to a string
        return "page=" + number;
    }

    /* Jobagent */
    function initJobAgentRecaptcha() {
        let $recaptcha = $('#jobagent-recaptcha');

        if (typeof grecaptcha !== 'object' || typeof grecaptcha.render !== 'function' || $recaptcha.length === 0) {
            $('#jobagent-form').one('recaptchaLoad', initJobAgentRecaptcha);
            return;
        }

        let recaptchaId = grecaptcha.render('jobagent-recaptcha', {
            'sitekey': $recaptcha.data('sitekey'),
            'callback': jobAgentRecaptchaSuccess
        });

        $recaptcha.data('recaptcha-id', recaptchaId);
    }

    function jobAgentRecaptchaSuccess() {
        $('#jobagent-recaptcha').children('div').removeClass('error');
    }

    $('.jobagent-form-wrapper').hide();

    $('.jobagent-subscribe').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('toggle');
        $('.jobagent-form-wrapper').slideToggle('slow');
    });

    $('.jobagent-form-wrapper .alert .close').on('click', function (e) {
        e.preventDefault();

        let $this = $(this);

        $this.find('.jobagent-message').removeClass('active');
        $this.parents('.alert').removeClass('active');
    });

    $('#jobagent-form__data_protection').on('click', function () {
        let $this = $(this),
            $submit = $('#jobagent-form').find('input[type="submit"]');

        $(this).siblings('.check-helper').toggleClass('checked');
        $submit.prop('disabled', !$this.prop('checked'));
    });

    $('#jobagent-form').on('submit', function (e) {
        e.preventDefault();

        let $form = $(this),
            $error = $form.siblings('#jobagent-error'),
            $info = $form.siblings('#jobagent-info'),
            $success = $form.siblings('#jobagent-success'),
            $recaptcha = $form.find('[name="g-recaptcha-response"]'),
            $email = $form.find('#jobagent-form__email'),
            $title = $form.find('#jobagent-form__title'),
            dataProtection = $form.find('#jobagent-form__data_protection').prop('checked'),
            recaptchaValue = $recaptcha.val(),
            keyword = filterObject.keyword,
            format = filterObject.format,
            agentFilterObject = {};

        $error.removeClass('active').find('.jobagent-message').removeClass('active');
        $success.removeClass('active').find('.jobagent-message').removeClass('active');

        console.log('--- A ---');
        if (false === dataProtection) {

            return;
        }

        console.log('--- B ---');

        $recaptcha.parents('div').removeClass('error');

        console.log('--- C ---');
        // if (typeof grecaptcha !== 'object' || $recaptcha.length === 0) {
        //
        //     return;
        // }

        console.log('--- D ---');

        if (recaptchaValue === '') {

            $recaptcha.parents('div').addClass('error');
            return;
        }

        console.log('--- E ---');

        $info.addClass('active').find('.jobagent-message[data-type="loading"]').addClass('active');

        console.log('--- F ---');

        if (keyword !== undefined) {
            delete filterObject.keyword;
            agentFilterObject.keyword = keyword;
        }

        console.log('--- G ---');

        agentFilterObject.filter = filterObject;

        if (format !== undefined) {
            delete generalObject.format;
        }

        console.log('--- H ---');

        $.extend(agentFilterObject, generalObject);

        let agentData = {
            'email': $email.val(),
            'template': generalObject.template,
            'locale': window.generalObject.lang,
            'title': $title.val(),
            'dataProtection': dataProtection ? 1 : 0,
            'filterObject': agentFilterObject,
            'g-recaptcha-response': recaptchaValue
        };

        console.log(agentData);
        console.log('--- I ---');


        $.post(jobAgentApiUrl, agentData, function (response) {
            $email.val('');
            $title.val('');

            console.log('--- J ---');
            console.log(response);

            $success.addClass('active').find('.jobagent-message[data-type="success"]').addClass('active');
        })
            .fail(function (response) {
                $error.find('.jobagent-message').removeClass('active');
                $error.addClass('active');

                if (response.status === 400) {
                    if (response.responseJSON === undefined || response.responseJSON.error === undefined || response.responseJSON.error.type === undefined) {
                        $error.find('.jobagent-message[data-type="generic"]').addClass('active');

                        return;
                    }

                    let type = response.responseJSON.error.type,
                        placeholder = response.responseJSON.error.placeholder,
                        $message = $error.find('.jobagent-message[data-type="' + type + '"]');

                    if (placeholder !== undefined) {
                        $message.find('.placeholder').text(placeholder);
                    }

                    $message.addClass('active');
                } else if (response.status === 500) {
                    $error.find('.jobagent-message[data-type="server"]').addClass('active');
                } else {
                    $error.find('.jobagent-message[data-type="generic"]').addClass('active');
                }
            })
            .always(function () {
                grecaptcha.reset($('#jobagent-recaptcha').data('recaptcha-id'));

                $info.find('.jobagent-message[data-type="loading"]').removeClass('active');

                if ($info.find('.jobagent-message.active').length === 0) {
                    $info.removeClass('active');
                }
            });

        if (keyword !== undefined) {
            filterObject.keyword = keyword;
        }

        if (format !== undefined) {
            generalObject.format = format;
        }
    });
    /* end Jobagent */

    /* start jobmap */
    function initJobMap() {
        let $jobmap = $('#jobmap');
        let zoom = 5;

        if ($jobmap.length === 0) {
            return;
        }

        if (typeof google !== 'object' || typeof google.maps !== 'object' || typeof google.maps.Map !== 'function') {
            $jobmap.one('initMap', initJobMap);
            return;
        }

        if (window.zoom) {
            zoom = window.zoom;
        }

        map = new google.maps.Map(document.getElementById('jobmap'), {
            center: {lat: 50.370, lng: 8.500},
            zoom: zoom,
            maxZoom: 12,
            mapTypeControl: false,
            streetViewControl: false,
            fullscreenControl: true
        });
    }

    function loadJobMapMarkers(filterurl) {
        try {
            $.get(jobMapApiUrl + filterurl, function (data) {
                jobMapMarkers = data;

                if (window.disableCluster) {
                    initJobMapMarkersWithoutCluster();
                } else {
                    initJobMapMarkers();
                }

            });
        } catch (e) {
            throw e;
        }
    }

    function initJobMapMarkersWithoutCluster() {
        // clear all markers
        $.each(visibleJobMapMarkers, function (idx, jobMapMarker) {
            jobMapMarker.setMap(null);
        });
        visibleJobMapMarkers = [];

        $.each(jobMapMarkers, function (idx, jobMapMarker) {
            let lat = parseFloat(jobMapMarker.lat),
                lng = parseFloat(jobMapMarker.lng);

            jobMapMarker.marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, lng),
                map: map,
                icon: {
                    url: jobMapPinUrl,
                    size: new google.maps.Size(29, 44),
                    scaledSize: new google.maps.Size(29, 44),
                    textColor: '#6a625a',
                    textSize: 12,
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(15, 44),
                    labelOrigin: new google.maps.Point(15, 15),
                },
                label: {
                    color: '#6a625a',
                    fontSize: '12px',
                    text: JSON.stringify(jobMapMarker.count)
                },
                count: parseInt(jobMapMarker.count),
                filterField: jobMapMarker.filterField,
                filterValue: jobMapMarker.filterValue,
            });

            google.maps.event.addListener(jobMapMarker.marker, 'click', function () {
                map.panTo(this.getPosition()); // set map center to marker position
                smoothZoom(map, 12, map.getZoom()); // call smoothZoom, parameters map, final zoomLevel, and starting zoom level
                markerClick(this);
            });

            visibleJobMapMarkers.push(jobMapMarker.marker);

            $('#jobmap').removeClass('hidden');
        });
    }

    function initJobMapMarkers() {
        visibleJobMapMarkers = [];

        $.each(jobMapMarkers, function (idx, jobMapMarker) {
            let lat = parseFloat(jobMapMarker.lat),
                lng = parseFloat(jobMapMarker.lng);

            jobMapMarker.marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, lng),
                map: map,
                icon: undefined,
                count: parseInt(jobMapMarker.count),
                filterField: jobMapMarker.filterField,
                filterValue: jobMapMarker.filterValue,
            });

            visibleJobMapMarkers.push(jobMapMarker.marker);
        });

        if (typeof markerClusterer === 'object') {
            markerClusterer.clearMarkers();
        }

        let styles = [
            {
                url: jobMapPinUrl,
                height: 44,
                width: 29,
                textColor: '#6a625a',
                textSize: 12,
                anchorIcon: [22, 0],
                anchorText: [-7, 0],
            },
            {
                url: jobMapClusterUrl,
                height: 60,
                width: 60,
                textColor: '#FFFFFF',
                textSize: 14,
            }
        ];

        if (window.sameClusterPins !== undefined && window.sameClusterPins == "true") {
            styles = [
                {
                    url: jobMapClusterUrl,
                    height: 60,
                    width: 60,
                    textColor: '#FFFFFF',
                    textSize: 14,
                },
                {
                    url: jobMapClusterUrl,
                    height: 60,
                    width: 60,
                    textColor: '#FFFFFF',
                    textSize: 14,
                }
            ];
        }

        markerClusterer = new MarkerClusterer(map, visibleJobMapMarkers, {
            minimumClusterSize: 1,
            averageCenter: true,
            styles: styles
        });

        markerClusterer.addListener('click', function (cluster) {
            let markers = cluster.getMarkers();

            if (markers.length === 1) {
                markerClick(markers[0]);
            }
        });

        markerClusterer.setCalculator(function (markers, numStyles) {
            let index = 1,
                count = 0;

            /* Check if at least one marker has another coordinate than the others */
            $.each(markers, function (idx, marker) {
                count += marker['count'];
            });

            if (markers.length > 1) {
                index = 2;
            }

            index = Math.min(index, numStyles);
            return {
                text: count,
                index: index,
                title: ''
            };
        });

        $('#jobmap').removeClass('hidden');
    }

    // the smooth zoom function
    function smoothZoom(map, max, cnt) {
        if (cnt >= max) {

        } else {
            var z = google.maps.event.addListener(map, 'zoom_changed', function (event) {
                google.maps.event.removeListener(z);
                smoothZoom(map, max, cnt + 1);
            });
            setTimeout(function () {
                map.setZoom(cnt)
            }, 50); // 80ms is what I found to work well on my system -- it might not work well on all systems
        }
    }

    function markerClick(marker) {
        let $filterBlock = $('.sidebar__filter-block[data-filter="' + marker.filterField + '"]'),
            $selectedCheckboxes = $filterBlock.find('input.sidebar__list-entry-check-input:checked'),
            $filterCheckbox = $filterBlock.find('input.sidebar__list-entry-check-input[value="' + marker.filterValue + '"]');

        $selectedCheckboxes = $selectedCheckboxes.not($filterCheckbox);

        $selectedCheckboxes.each(function () {
            let $this = $(this);

            $this.prop('checked', false);
            handleCheckboxChange($this);
        });

        $filterCheckbox.prop('checked', true);
        handleCheckboxChange($filterCheckbox);

        triggerFilterApi();
    }

    $('.button-map-toggle').on('click', function () {
        $('#jobmap').toggleClass('hidden');
    });
    /* end jobmap */

    $('[data-toggle="tooltip"]').tooltip();

    $(document)
        .ajaxStart(function () {
            $('.loader').fadeIn('normal');
        })
        .ajaxStop(function () {
            $('.loader').fadeOut('normal');
        })

    /*-----------------------------------------------------------*/

})($j);
