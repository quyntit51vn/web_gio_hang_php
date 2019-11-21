
@if($type)
	@if($products!==null && count($products))
	<div style="padding: 30px 10px;">
		<ul>
			@foreach($products as $key => $value)
			<li style="margin-top: 10px;">
				<div class="col col-md-8"><img src="{{$value->avatar_image}}" style="max-height: 70px;" alt=""> <p style="font-weight: bold;">{{$value->name}}</p></div>
				<div class="col col-md-3" style="color: #FF4646; text-align: right; margin-top: 25px;" >
					@if($value->activity)
						{{adddotstring($value->price_deal)}}
					@else
						{{adddotstring($value->price)}}
					@endif
					<div style="color: black;"> x {{$quantity[$value['id']]}}</div>
				</div>
				<div class="col col-md-1"  onclick="delete_image({{$value->id}})" style="color: #FF4646; text-align: right; margin-top: 25px;"><a href="javascript:void(0)"><i class="fa fa-trash"></i></a></div>
			</li>
			<div style="clear: both" ></div>
			@endforeach
		</ul>
		<div style="clear: both;"></div>
		<a href="{{ route('cart.view_cart') }}"><button class="btn"  style="background-color: #10bfbb; float:right; color: white;">View cart</button></a>
		<div style="clear: both;"></div>
	</div>
	@else
	<img src="{{url('').'/upload/image/empty.jpg'}}" style="width: 100%;" alt="">
	@endif
@else
<style>
	.modal {
        display: none; 
        z-index: 100;
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #000000ab;
        width: 25vw;
        padding: 50px 0px 10px 0px;
        z-index: 101;
        margin: 35vh auto;
        border: none;
    }
	input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    .quantity_product{
    	height: 25px!important;
        background-color: #fff; width: 50px !important; text-align:center;
    }
    .btn-minus{
    	font-size: 10px;
    	height: 25px;
        margin: -52px 0px 0px -38px;
    }
    .btn-plus{
    	font-size: 10px;
    	height: 25px;
        margin: -52px 0px 0px 55px;
    }
</style>

	<h1 class="page-title">Shopping Cart Summary</h1>
	<div class="page-content page-order">
	        @if(!empty($products) && count($products))
	    <div id="product_message" class="heading-counter warning" style="background: #fff">Your shopping cart contains:
	        <span>{{ count($products) }} Product</span>
	    </div>
	        @else 
	        <div style="width: 100%; background-color: white;  padding: 40px;">
                <img src="{{url('').'/upload/image/empty.jpg'}}" style="width: 50%; margin-left:25%; margin-top: 30px;" alt="">
            </div>
	        @endif
	    <div class="order-detail-content" style="background: #ffffff">
	    	@if(!empty($products) && count($products) > 0)
	        <table class="cart_summary" >
	            <thead>
	                <tr>
	                    <th class="cart_product">Product</th>
	                    <th style="width: 43%;">Description</th>
	                    <th>Status</th>
	                    <th>Price</th>
	                    <th>Quantity</th>
	                    <th>Sum</th>
	                    <th class="action"><i class="fa fa-trash-o"></i></th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php $total = 0 ?>
	            	@foreach($products as $product)
	            	@if($product['activity'])
	            	<?php $total += (int)$quantity[$product['id']]*$product['price_deal']; ?>
	            	@else
	            	<?php $total += (int)$quantity[$product['id']]*$product['price']; ?>
	            	@endif
	            	{{ $product->avata_image }}
	                <tr style="min-height: 20px;vertical-align: middle;">
	                    <td class="cart_product">
	                        <a href="{{ route('fe_product_details',['id' => $product['id'],'name' => $product['name']]) }}"><img class="img-responsive" src="{{ $product['avatar_image'] }}" alt="Product"></a>
	                    </td>
	                    <td class="cart_description" style="max-height: 200px; display: block; overflow: auto;">
	                        <p class="product-name"><a href="{{ route('fe_product_details',['id' => $product['id'],'name' => $product['name']]) }}">{{ $product['name'] }}</a></p>
	                        <small class="cart_ref">{!! $product->description !!}</small><br>
	                    </td>
	                    @if($product['activity'])
	                    <td class="cart_avail"><div class="label label-info " style="background-color: #FF7E7E;">Deal Approved</div>
	                    <td class="price"><span> {{ adddotstring($product['price_deal']) }} </span></td>
	                    @else
	                    <td class="cart_avail"><div class="label label-default">No Discounts</div></td>
	                    <td class="price"><span> {{ adddotstring($product['price']) }} </span></td>
	                    @endif
	                    
	                    <td class="quantity" data-id="{{$product['id']}}" style="text-align: center;">
	                    	<div style="margin: 10px 0px -20px 35px;">
	                            <input type="number" class="quantity_product" id="{{$product['id']}}" name="products[{{$product['id']}}]" min=1 max=5 readonly="true" value="{{$quantity[$product['id']]}}">
	                            <div class="btn btn-info btn-minus" data-id="{{$product['id']}}"><i class="fa fa-minus"></i></div>
	                            <div class="btn btn-info btn-plus" data-id="{{$product['id']}}"><i class="fa fa-plus"></i></div>
	                        </div>
	                	</td>
						@if($product['activity'])
	                    <td class="price" style="text-align: center; color: #10bfbb;font-weight: bold;"><?php echo adddotstring($quantity[$product['id']]*$product['price_deal']); ?></td>
	                    @else
	                    <td class="price" style="text-align: center; color: #10bfbb; font-weight: bold;"><?php echo adddotstring($quantity[$product['id']]*$product['price']); ?></td>
	                    @endif
	                    <td class="cart_avail" style="font-size: 20px; color: red;">
	                        <a href="javascript:void(0)" onclick="delete_image({{$product->id}})" ><i class="fa fa-trash"></i></a>
	                    </td>
	                </tr>
	            	@endforeach
	            </tbody>
	            <tfoot>
	                <tr>
	                    <td colspan="3"><strong><h3>Total</h3></strong></td>
	                    <td colspan="4" style="color: #0C9F9C;"><strong id="total"><h3>{{ number_format($total) }}</h3></strong> </td>
	                </tr>
	            </tfoot>    
	        </table>
	    	@endif
	    </div>
	</div>
	<script>
		$(".quantity_product").change(function(event) {
            var quantity_product = $(this).val();
            if(quantity_product > 5)
                $(this).val(5);
            if(quantity_product < 1)
                $(this).val(1);
        });
        $(".btn-minus").click(function(event) {
            var quantity_product = $(this).parent('').children(".quantity_product").val();
            if(quantity_product > 1){
                quantity_product--;
            }
            $(this).parent('').children(".quantity_product").val(quantity_product);
            var data = {
                'quantity': quantity_product,
                'type' : true 
            };
            var id = $(this).attr('data-id');
            $.get("{{ url('')}}"+"/cart/change_quantity/"+id, data,function (data, status) {
                    $.get("{{url('')}}/cart/view-mini-cart/1", function (data) {
		                $(".block-mini-cart").html(data);
		                
		            });
		            $.get("{{url('')}}/cart/view-mini-cart/0", function (data) {
		                $(".main-cart").html(data);
		            });
		            if(x==1){
	                    $(".not0").html('');    
	                }
	                $(".number_item_cart").text(x-1);

            });
        });
        $(".btn-plus").click(function(event) {
            var quantity_product = $(this).parent('').children(".quantity_product").val();
            if(quantity_product < 5){
                quantity_product++;
            }
            $(this).parent('').children(".quantity_product").val(quantity_product);
             var data = {
                'quantity': quantity_product,
                'type' : true 
            };
            var id = $(this).attr('data-id');
            $.get("{{ url('')}}"+"/cart/change_quantity/"+id,data, function (data, status) {
                    $.get("{{url('')}}/cart/view-mini-cart/1", function (data) {
		                $(".block-mini-cart").html(data);
		                
		            });
		            $.get("{{url('')}}/cart/view-mini-cart/0", function (data) {
		                $(".main-cart").html(data);
		            });
		            if(x==1){
	                    $(".not0").html('');    
	                }
	                $(".number_item_cart").text(x+1);

            });
        });
        $("#id01").click(function(event) {
            $(this).css('display', 'none');
        });
	</script>
@endif
<div id="id01" class="modal">
    <div class="modal-content">
    </div>
</div>
<script>
	// $(document).ready(function() {
			function currencyFormat (num) {
			    return num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
			}
			var array_price = document.getElementsByClassName("price_js");
			for (i = 0; i < array_price.length; i++) {
					array_price[i].innerHTML = currencyFormat(parseInt(array_price[i].innerHTML));
    	}
	   	var x = $(".number_item_cart").text();
        if(x==""){
            x=0;
        }else{
            x = parseInt(x);
        }
       	
        function delete_image(id) {
            $.get("{{url('')}}/cart/delete/" + id, function (data, status) {
                    $.get("{{url('')}}/cart/view-mini-cart/1", function (data) {
		                $(".block-mini-cart").html(data);
		                
		            });
		            $.get("{{url('')}}/cart/view-mini-cart/0", function (data) {
		                $(".main-cart").html(data);
		            });
		            if(x==1){
	                    $(".not0").html('');    
	                }
	                // $(".number_item_cart").text(x-parseInt($("#"+id).val()));
            });
        }
        // });       
      $('.checkbox_buy').click(function() {
			var price = parseInt($(this).attr('price'));
			var total = parseInt($('#total').attr('price'));
			if($(this).attr('checked') != null) {
				total = Number(total,10) - Number(price,10);
				$(this).attr('checked',null);
			} else  {
				total = Number(total,10) + Number(price,10);
				$(this).attr('checked','ok');
			}
			$('#total').text(currencyFormat(total).toString());
			$('#total').attr('price', total.toString());
		});
</script>