(function ($) {
    "use strict";
    var portfolio = {
        init: function () {
            /*-------------- Circle progress bar Functions Calling ---------------------------------------------------
            ------------------------------------------------------------------------------------------------*/
            this.circle_progressbar();
        },

        /*-------------- Circle progress bar Functions ---------------------------------------------------
        ---------------------------------------------------------------------------------------------------*/

        // circle progress bar js start
        circle_progressbar: function () {
            if ($('.progressbar').length > 0) {
                $(document).ready(function () {
                    function animateElements() {
                        $('.progressbar').each(function () {
                            var elementPos = $(this).offset().top;
                            var topOfWindow = $(window).scrollTop();
                            var percent = $(this).find('.circle').attr('data-percent');
                            var animate = $(this).data('animate');
                            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                                $(this).data('animate', true);
                                $(this).find('.circle').circleProgress({
                                    startAngle: -Math.PI / 2,
                                    value: percent / 100,
                                    size: 400,
                                    thickness: 15,
                                    lineCap: 'round',
                                    fill: {
                                        color: '#fff'
                                    }
                                }).on('circle-animation-progress', function (event, progress, stepValue) {
                                    $(this).find('strong').text((stepValue * 100).toFixed(0) + "%");
                                }).stop();
                            }
                        });
                    }

                    animateElements();
                    $(window).scroll(animateElements);


                });
            }
        },

        // circle progress bar js start
        /*------------------------------------------------------------------*/

    };
    portfolio.init();


}(jQuery));	
