"use strict";

const $j = require('jquery').noConflict(true);

(function ($) {
    $('#mr-jobagent-form #subscription_jobagent_check_input').on('click', function () {
        let $this = $(this),
            $submit = $('#mr-jobagent-form').find('button[type="submit"]');

        $(this).siblings('.check-helper').toggleClass('checked');
        $submit.prop('disabled', !$this.prop('checked'));
    });

    $('#mr-jobagent-form').on('submit', function (e) {
        e.preventDefault();

        let $form = $(this),
            $error = $form.siblings('#jobagent-error'),
            $info = $form.siblings('#jobagent-info'),
            $success = $form.siblings('#jobagent-success'),
            $friendlyCaptcha = $form.find('[name="frc-captcha-solution"]'),
            $email = $form.find('#subscription_jobagent_form_email'),
            $title = $form.find('#subscription_jobagent_form_title'),
            dataProtection = $form.find('#subscription_jobagent_check_input').prop('checked'),
            captchaValue = $friendlyCaptcha.val(),
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

        $friendlyCaptcha.parents('div').removeClass('error');

        console.log('--- C ---');
        if (typeof friendlyChallenge !== 'object' || $friendlyCaptcha.length === 0) {

            return;
        }

        console.log('--- D ---');

        if (captchaValue === '') {

            $friendlyCaptcha.parents('div').addClass('error');
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
            'frc-captcha-solution': captchaValue
        };

        console.log(agentData);
        console.log('--- I ---');


        $.post(jobAgentApiUrl, agentData, function (response) {
            $email.val('');
            $title.val('');

            console.log('--- J ---');

            // console.log(response);

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
                friendlyChallenge.autoWidget.reset();

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
})($j);
