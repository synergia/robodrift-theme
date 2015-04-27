/*
	Tessellate by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function ($) {

    skel.init({
        reset: 'full',
        breakpoints: {
            'global': {
                range: '*',
                href: 'css/style.css',
                containers: 1360,
                grid: {
                    gutters: 50
                }
            },
            'wide': {
                range: '-1680',
                href: 'css/style-wide.css',
                containers: 1200,
                grid: {
                    gutters: 40
                }
            },
            'normal': {
                range: '-1280',
                href: 'css/style-normal.css',
                containers: 960,
                grid: {
                    gutters: 30
                }
            },
            'narrow': {
                range: '-1000',
                href: 'css/style-narrow.css',
                containers: '100%',
                grid: {
                    gutters: 25,
                    collapse: true
                }
            },
            'mobile': {
                range: '-736',
                href: 'css/style-mobile.css',
                grid: {
                    gutters: 10
                },
                viewport: {
                    scalable: false
                }
            }
        }
    });

    $(function () {

        var $window = $(window),
            $body = $('body');

        // Disable animations/transitions until the page has loaded.
        $body.addClass('is-loading');

        $window.on('load', function () {
            $body.removeClass('is-loading');
        });

        // Forms (IE<10).
        var $form = $('form');
        if ($form.length > 0) {

            $form.find('.form-button-submit')
                .on('click', function () {
                    $(this).parents('form').submit();
                    return false;
                });

            if (skel.vars.IEVersion < 10) {
                $.fn.n33_formerize = function () {
                    var _fakes = new Array(),
                        _form = $(this);
                    _form.find('input[type=text],textarea').each(function () {
                        var e = $(this);
                        if (e.val() == '' || e.val() == e.attr('placeholder')) {
                            e.addClass('formerize-placeholder');
                            e.val(e.attr('placeholder'));
                        }
                    }).blur(function () {
                        var e = $(this);
                        if (e.attr('name').match(/_fakeformerizefield$/)) return;
                        if (e.val() == '') {
                            e.addClass('formerize-placeholder');
                            e.val(e.attr('placeholder'));
                        }
                    }).focus(function () {
                        var e = $(this);
                        if (e.attr('name').match(/_fakeformerizefield$/)) return;
                        if (e.val() == e.attr('placeholder')) {
                            e.removeClass('formerize-placeholder');
                            e.val('');
                        }
                    });
                    _form.find('input[type=password]').each(function () {
                        var e = $(this);
                        var x = $($('<div>').append(e.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, 'type=text'));
                        if (e.attr('id') != '') x.attr('id', e.attr('id') + '_fakeformerizefield');
                        if (e.attr('name') != '') x.attr('name', e.attr('name') + '_fakeformerizefield');
                        x.addClass('formerize-placeholder').val(x.attr('placeholder')).insertAfter(e);
                        if (e.val() == '') e.hide();
                        else x.hide();
                        e.blur(function (event) {
                            event.preventDefault();
                            var e = $(this);
                            var x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]');
                            if (e.val() == '') {
                                e.hide();
                                x.show();
                            }
                        });
                        x.focus(function (event) {
                            event.preventDefault();
                            var x = $(this);
                            var e = x.parent().find('input[name=' + x.attr('name').replace('_fakeformerizefield', '') + ']');
                            x.hide();
                            e.show().focus();
                        });
                        x.keypress(function (event) {
                            event.preventDefault();
                            x.val('');
                        });
                    });
                    _form.submit(function () {
                        $(this).find('input[type=text],input[type=password],textarea').each(function (event) {
                            var e = $(this);
                            if (e.attr('name').match(/_fakeformerizefield$/)) {
                                e.attr('name', '');
                            }
                            if (e.val() == e.attr('placeholder')) {
                                e.removeClass('formerize-placeholder');
                                e.val('');
                            }
                        });
                    }).bind("reset", function (event) {
                        event.preventDefault();
                        $(this).find('select').val($('option:first').val());
                        $(this).find('input,textarea').each(function () {
                            var e = $(this);
                            var x;
                            e.removeClass('formerize-placeholder');
                            switch (this.type) {
                            case 'submit':
                            case 'reset':
                                break;
                            case 'password':
                                e.val(e.attr('defaultValue'));
                                x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]');
                                if (e.val() == '') {
                                    e.hide();
                                    x.show();
                                } else {
                                    e.show();
                                    x.hide();
                                }
                                break;
                            case 'checkbox':
                            case 'radio':
                                e.attr('checked', e.attr('defaultValue'));
                                break;
                            case 'text':
                            case 'textarea':
                                e.val(e.attr('defaultValue'));
                                if (e.val() == '') {
                                    e.addClass('formerize-placeholder');
                                    e.val(e.attr('placeholder'));
                                }
                                break;
                            default:
                                e.val(e.attr('defaultValue'));
                                break;
                            }
                        });
                        window.setTimeout(function () {
                            for (x in _fakes) _fakes[x].trigger('formerize_sync');
                        }, 10);
                    });
                    return _form;
                };
                $form.n33_formerize();
            }

            // Custom select.
            $form.find('.select select')
                .on('focus', function () {
                    $(this).parent().addClass('focus');
                })
                .on('blur', function () {
                    $(this).parent().removeClass('focus');
                });

        }

        // CSS polyfills (IE<9).
        if (skel.vars.IEVersion < 9)
            $(':last-child').addClass('last-child');

        // Scrolly links.
        $('a').scrolly();

    });

    //Read more
    $(window).load(function () {
        $('#regulamin ol').readmore({
            embedCSS: false,
            speed: 300,
            moreLink: '<button class="button switch" title="Rozwiń">Rozwiń<br><span class="icon fa-caret-down"></span></button>',
            lessLink: '<button class="button switch" title="Zwiń">Zwiń<br><span class="icon fa-caret-up"></span></button>',
            beforeToggle: function (trigger, element, expanded) {
                if (expanded) { // The "Close" link was clicked
                    $('html, body').animate({
                        scrollTop: $('#second').offset().top
                    }, {
                        duration: 100
                    });
                }
            }
        });
        $('#category .container').readmore({
            embedCSS: true,
            speed: 300,
            moreLink: '<button class="button switch" title="Rozwiń">Rozwiń<br><span class="icon fa-caret-down"?</span></button>',
            lessLink: '<button class="button switch" title="Zwiń">Zwiń<br><span class="icon fa-caret-up"></span></button>',
            blockCSS: 'display: block; margin: auto;',
            beforeToggle: function (trigger, element, expanded) {
                if (expanded) { // The "Close" link was clicked
                    $('html, body').animate({
                        scrollTop: $('#category').offset().top
                    }, {
                        duration: 100
                    });
                }
            }
        });
    });

    $(document).ready(function () {
        //http://callmenick.com/2013/04/22/single-page-site-with-smooth-scrolling-highlighted-link-and-fixed-navigation/
        /**
         * This part does the "fixed navigation after scroll" functionality
         * We use the jQuery function scroll() to recalculate our variables as the
         * page is scrolled/
         */
        $(window).scroll(function () {
            var window_top = $(window).scrollTop(); // the "12" should equal the margin-top value for nav.stick
            var div_top = $('.nav-container').offset().top;
            if (window_top > div_top) {
                $('nav').addClass('sticky');
                $('a#pull').removeClass('noshow');
            } else {
                $('nav').removeClass('sticky');
                $('a#pull').addClass('noshow');
            }
        });
        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $("nav li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i = 0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values

        $(window).scroll(function () {
            var windowPos = $(window).scrollTop() + 2; // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();

            for (var i = 0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("active");
                } else {
                    $("a[href='" + theID + "']").removeClass("active");
                }
            }


            if (windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("active").css('border-bottom', 'none');
                    $("nav li:last-child a").addClass("active");

                }
            }
        });
    });

    $(document).ready(function () {
        $('.switch').on('click', function (e) {
            $('#cardId').toggleClass("flip"); //you can list several class names
            e.preventDefault();
        });
    });

    //M E N U
    $(function () {
        var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();

        $(pull).on('click', function (e) {
            e.preventDefault();
            menu.slideToggle();
        });
    });
    $(window).resize(function () {
        var w = $(window).width();
        if (w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
})(jQuery);
