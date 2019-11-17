<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<script type="text/javascript" src="../../vendor/frontend/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../../vendor/frontend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../vendor/frontend/bower_components/bxslider-4/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="../../vendor/frontend/js/owl_clone.min.js"></script>
<script type="text/javascript" src="../../vendor/frontend/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- COUNTDOWN -->
<script type="text/javascript" src="../../vendor/frontend/bower_components/jquery.countdown/jquery.plugin.min.js"></script>
<script type="text/javascript" src="../../vendor/frontend/bower_components/jquery.countdown/jquery.countdown.min.js"></script>
<!-- ./COUNTDOWN -->
<script type="text/javascript" src="../../vendor/frontend/js/actual.min.js"></script>

<script type="text/javascript" src="../../vendor/frontend/js/script.js"></script>

<script>
    $(document).ready(function() {
        $(".block-wrap-cart").hover(function() {
            $.get("<?php echo url(''); ?>/cart/view-mini-cart/1", function(data) {
                $(".block-mini-cart").html(data);
            });
        }, function() {
            $(".block-mini-cart").html("");
        });
    });
</script>
<script>
    $(document).ready(function($) {
        // alert("xxxx");
        $(".link_container").hover(function() {
            var x = $(this).parents(".dropdown-menu").height();
            $(this).children('ul').css({
                display: 'inline',
                transform: 'translate(0,0)',
                top: "-" + (parseInt($(this).attr("data-id")) * 100) + "%",
                marginTop: "-" + (parseInt($(this).attr("data-id")) * 2) + "px",
                height: x + "px",
                opacity: "1",
            });
        }, function() {
            $(this).children('ul').css({
                display: 'none',
                opacity: "0",
                transform: 'translate(0,40)'
            });
        });
    });
</script>
</body>

</html>