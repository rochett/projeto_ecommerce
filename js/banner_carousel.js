$(document).ready(function() {
                    $('#banner3 div:first-child').css('display', 'block');
                });

                var banner = function() {
                    $('#banner3').cycle({
                        before: function(current, next) {
                            $(next).parent().height($(next).outerHeight());
                        }
                    });
                }

                setTimeout(banner, 2000);