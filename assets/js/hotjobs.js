"use strict";
const $j = require('jquery').noConflict(true);

(function ($) {


    function initFilterObject() {
        // add default values to filterObject and generalObject
        window.generalObject = window.JbConfig.generalObject;
        window.filterObject = window.JbConfig.filterObject;
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

            gen['format'] = 'hotjobs';
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


            $.get(widgetApiUrl + filterurl, function (data) {
                $('.loader').after(data);
            });
        } catch (e) {
            throw e;
        }
    }

    function pageFilter(number) {
        //add the page number to a string
        return "page=" + number;
    }

    initFilterObject();
    triggerFilterApi();

})($j);