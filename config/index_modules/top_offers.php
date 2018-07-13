<script type="text/javascript"><!--
    $(document).ready(function () {
        $('#banner0 div:first-child').css('display', 'block');
    });

    var banner = function () {
        $('#banner0').cycle({
            before: function (current, next) {
                $(next).parent().height($(next).outerHeight());
            }
        });
    }

    setTimeout(banner, 2000);
    //--></script>
<div class="span4">
    <div id="banner1" class="banner">
        <div>
            <iframe src="banner/banner1.php" scrolling="no" frameborder="0" width="100%" height="143"></iframe>
        </div>
    </div>
</div>
<script type="text/javascript"><!--
    $(document).ready(function () {
        $('#banner1 div:first-child').css('display', 'block');
    });

    var banner = function () {
        $('#banner1').cycle({
            before: function (current, next) {
                $(next).parent().height($(next).outerHeight());
            }
        });
    }

    setTimeout(banner, 2000);
    //--></script>
<div class="span4">
    <div id="banner2" class="banner">
        <div>
            <iframe src="banner/banner2.php" scrolling="no" frameborder="0" width="100%" height="143"></iframe>
        </div>
    </div>
</div>

<script type="text/javascript"><!--
    $(document).ready(function () {
        $('#banner2 div:first-child').css('display', 'block');
    });

    var banner = function () {
        $('#banner2').cycle({
            before: function (current, next) {
                $(next).parent().height($(next).outerHeight());
            }
        });
    }

    setTimeout(banner, 2000);
    //--></script>
<div class="clearfix"></div>
