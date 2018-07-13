function display(view) {
            if (view == 'list') {
                $('.product-grid').attr('class', 'product-list');

                $('.product-list > div').each(function(index, element) {

                    html = '<div>';
                    html += '<div class="left">';
                    html += '<div class="btnImgWrap">';
                    //image
                    var image = $(element).find('.image').html();
                    if (image != null) {
                        html += '<div class="image">' + image + '</div>';
                    }
                    //buttons
                    html += '<ul class="btnGroup tooltip-title">';
                    html += '  <li class="cartBt">' + $(element).find('.cartBt').html() + '</li>';
                    html += '  <li class="wishBt">' + $(element).find('.wishBt').html() + '</li>';
                    html += '  <li class="compareBt">' + $(element).find('.compareBt').html() + '</li>';
                    html += '</ul>';
                    html += '</div>';
                    html += '</div>';//end left

                    html += '<div class="right">';
                    //name
                    html += '  <div class="name">' + $(element).find('.name').html() + '</div>';
                    //description
                    html += '  <div class="description">' + $(element).find('.description').html() + '</div>';
                    //rating
                    var rating = $(element).find('.rating').html();
                    if (rating != null) {
                        html += '<div class="rating">' + rating + '</div>';
                    }
                    //price
                    var price = $(element).find('.price').html();
                    if (price != null) {
                        html += '<div class="price">' + price  + '</div>';
                    }

                    //END
                    html += '</div>';//end right
                    html += '</div>';

                    $(element).html(html);
                });

                $('.display').html('<b>Display:</b> <div class="display_list">List</div> <div class="display_grid"><a  onclick="display(\'grid\');" title="Grid"></a></div>');

                $.totalStorage('display', 'list');
            } else {
                $('.product-list').attr('class', 'product-grid');

                $('.product-grid > div').each(function(index, element) {
                    html = '';
                    //image
                    html += '<div class="btnImgWrap">';
                    var image = $(element).find('.image').html();
                    if (image != null) {
                        html += '<div class="image">' + image + '</div>';
                    }
                    //buttons
                    html += '<ul class="btnGroup tooltip-title">';
                    html += '  <li class="cartBt">' + $(element).find('.cartBt').html() + '</li>';
                    html += '  <li class="wishBt">' + $(element).find('.wishBt').html() + '</li>';
                    html += '  <li class="compareBt">' + $(element).find('.compareBt').html() + '</li>';
                    html += '</ul>';
                    html += '</div>';
                    //name
                    html += '<div class="name">' + $(element).find('.name').html() + '</div>';
                    //description
                    html += '<div class="description">' + $(element).find('.description').html() + '</div>';
                    //rating
                    var rating = $(element).find('.rating').html();
                    if (rating != null) {
                        html += '<div class="rating">' + rating + '</div>';
                    }
                    //price
                    var price = $(element).find('.price').html();
                    if (price != null) {
                        html += '<div class="price">' + price  + '</div>';
                    }

                    //end
                    html += '</div>';

                    $(element).html(html);
                });

                $('.display').html('<b>Display:</b> <div class="display_list"><a onclick="display(\'list\');"  title="List"></a></div> <div class="display_grid">Grid</div>');

                $.totalStorage('display', 'grid');
            }
        }

        view = $.totalStorage('display');

        if (view) {
            display(view);
        } else {
            display('grid');
        }