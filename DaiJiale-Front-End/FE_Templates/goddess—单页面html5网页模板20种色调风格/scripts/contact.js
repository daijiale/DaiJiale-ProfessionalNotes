$(function () {
    var $feedbackForm = $('.js-feedback-form'),
        $subscribeForm = $('.js-subscribe-form');

    function init() {
        updateVars();
        bindEvents();
    }

    function updateVars() {
        $.validator.addClassRules('js-check-name', {
            required: true,
            minlength: 2
        });
        $.validator.addClassRules('js-check-email', {
            required: true,
            email: true
        });
        $.validator.addClassRules('js-check-message', {
            required: true,
            minlength: 5
        });
    }

    function bindEvents() {
        subscribeFormValidate();
        feedbackFormValidate();
    }

    function subscribeFormValidate() {
        $subscribeForm.validate({
            errorElement: 'span',
            errorClass: 'has-error',
            validClass: 'has-success',
            highlight: function (element, errorClass) {
                $(element).closest('.form-group').addClass(errorClass);
            },
            unhighlight: function (element, errorClass) {
                $(element).closest('.form-group').removeClass(errorClass);
            },
            submitHandler: function (form) {
                var $form = $(form);
                $form.find('.success-message, .error-message').remove();
                $.ajax({
                    type: $form.attr('method') || 'post',
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    dataType: 'json',
                    success: function (response) {
                        var result = '';
                        if (response.success) {
                            $form.addClass('subscribe-success');
                            result = '<div class="success-message">Thanks for subscribing!</div>';
                            $form.find('input').val('');
                        } else {
                            result = '<div class="help-block error-message">' + (response.message || 'Subscribe action error!') + '</div>';
                        }
                        $form.prepend(result);
                    }
                });
                return false;
            }
        });
    }

    function feedbackFormValidate() {
        $feedbackForm.validate({
            errorElement: 'span',
            errorClass: 'has-error',
            validClass: 'has-success',
            highlight: function (element, errorClass) {
                $(element).closest('.form-group').addClass(errorClass);
            },
            unhighlight: function (element, errorClass) {
                $(element).closest('.form-group').removeClass(errorClass);
            },
            submitHandler: function (form) {
                var $form = $(form);
                $form.find('.success-message, .error-message').remove();
                $.ajax({
                    type: $form.attr('method') || 'post',
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    dataType: 'json',
                    success: function (response) {
                        var result = '';
                        if (response.success) {
                            $form.addClass('contact-success');
                            result = '<div class="success-message">Your message was successfully sent.</div>';
                            $form.find('input,textarea').val('');
                        } else {
                            result = '<div class="help-block error-message">' + (response.message || 'Feedback action error!') + '</div>';
                        }
                        $form.prepend(result);
                    }
                });
                return false;
            }
        });
    }

    init();
});