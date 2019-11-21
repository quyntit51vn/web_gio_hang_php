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
<script type="text/javascript" src="../../vendor/frontend/js/script.js?<?=date('l jS \of F Y h:i:s A')?>"></script>
<script type="text/javascript" src="https://kute-themes.com/html/edo/html/assets/lib/easyzoom/easyzoom.js"></script>

<script>
    $(document).ready(function($) {
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
<script>
    $(document).ready(function($) {
        $(".btn-minus").click(function(event) {
            var quantity_product = $(".quantity_product").val();
            if (quantity_product > 1) {
                quantity_product--;
            }
            $(".quantity_product").val(quantity_product);
        });
        $(".btn-plus").click(function(event) {
            var quantity_product = $(".quantity_product").val();
            quantity_product++;
            $(".quantity_product").val(quantity_product);
        });
        $("#add-cart").click(function(event) {
            var x = $(".number_item_cart").text();
            if (x == "") {
                x = 0;
            } else {
                x = parseInt(x);
            }
            var quantity = $(".quantity_product").val();
            var data = {
                'quantity': quantity
            };
            // $.ajax({
            //     url: '{{ route("cart.add_to_cart",$product["id"]) }}', // gửi đến file upload.php
            //     dataType: "text",
            //     data: data,
            //     type: 'get',
            //     success: function(res, status, msg) {
            //         var res = JSON.parse(res);
            //         if (res.status == 'success') {
            //             $("#id01 .modal-content").html('<div style="text-align: center;"><i class="fa fa-check-circle"  style="color: #44FFDE;margin-bottom: 20px; font-size: 100px;"></i><br><h3 style="color: white; ">' + res.msg + '</h3></div>');
            //             $("#id01").css('display', 'block');
            //             if (x == 0) {
            //                 $(".not0").html('<span class="number_item_cart">0</span>');
            //             }
            //             $(".number_item_cart").text(x + parseInt(quantity));
            //         } else {
            //             $("#id01 .modal-content").html('<div style="text-align: center;"><i class="fa fa-ban"  style="color: #F95C5C;margin-bottom: 20px; font-size: 100px;"></i><br><h3 style="color: white; ">' + res.msg + '</h3></div>');
            //             $("#id01").css('display', 'block');
            //         };
            //         var time = 4;
            //         var myVar = setInterval(function() {
            //             time--;
            //             if (time <= 0) {
            //                 $("#id01").css('display', 'none');
            //                 clearInterval(myVar);
            //             }
            //         }, 1000);
            //     },
            //     fail: function(res) {
            //         alert('Đã xảy ra lỗi');
            //         return false;
            //     }

            // });
        });
    });
</script>
</body>

</html>