$(document).ready(function() {
            $('.colorbox').colorbox({
                overlayClose: true,
                opacity: 0.5,
                rel: "colorbox"
            });
        });
		
$('select[name="profile_id"], input[name="quantity"]').change(function(){
            $.ajax({
                url: 'index.php?route=product/product/getRecurringDescription',
                type: 'post',
                data: $('input[name="product_id"], input[name="quantity"], select[name="profile_id"]'),
                dataType: 'json',
                beforeSend: function() {
                    $('#profile-description').html('');
                },
                success: function(json) {
                    $('.success, .warning, .attention, information, .error').remove();

                    if (json['success']) {
                        $('#profile-description').html(json['success']);
                    }
                }
            });
        });

        $('#button-cart').bind('click', function() {
            $.ajax({
                url: 'index.php?route=checkout/cart/add',
                type: 'post',
                data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
                dataType: 'json',
                success: function(json) {
                    $('.success, .warning, .attention, information, .error').remove();

                    if (json['error']) {
                        if (json['error']['option']) {
                            for (i in json['error']['option']) {
                                $('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
                            }
                        }

                        if (json['error']['profile']) {
                            $('select[name="profile_id"]').after('<span class="error">' + json['error']['profile'] + '</span>');
                        }
                    }

                    if (json['success']) {
                        $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/magnum/image/close.png" alt="" class="close" /></div>');

                        $('.success').fadeIn('slow');

                        $('#cart-total').html(json['total']);

                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                }
            });
        });
		
$('#review .pagination a').live('click', function() {
            $('#review').fadeOut('slow');

            $('#review').load(this.href);

            $('#review').fadeIn('slow');

            return false;
        });

        $('#review').load('index8022.html?route=product/product/review&amp;product_id=64');

        $('#button-review').bind('click', function() {
            $.ajax({
                url: 'index.php?route=product/product/write&product_id=64',
                type: 'post',
                dataType: 'json',
                data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),
                beforeSend: function() {
                    $('.success, .warning').remove();
                    $('#button-review').attr('disabled', true);
                    $('#review-title').after('<div class="attention"><img src="catalog/view/theme/magnum/image/loading.gif" alt="" /> Please Wait!</div>');
                },
                complete: function() {
                    $('#button-review').attr('disabled', false);
                    $('.attention').remove();
                },
                success: function(data) {
                    if (data['error']) {
                        $('#review-title').after('<div class="warning">' + data['error'] + '</div>');
                    }

                    if (data['success']) {
                        $('#review-title').after('<div class="success">' + data['success'] + '</div>');

                        $('input[name=\'name\']').val('');
                        $('textarea[name=\'text\']').val('');
                        $('input[name=\'rating\']:checked').attr('checked', '');
                        $('input[name=\'captcha\']').val('');
                    }
                }
            });
        });
		
$('#tabs a').tabs();						