$('#count').change(function() {

	var count = parseInt($(this).val(), 10);

	console.log(count);

	var id = $('.add-to-cart').data('item-id');

	var token = $('.add-to-cart').data('token');

	$('.add-to-cart').html('<a href="/iShop/products/add_to_cart/'+count+'/'+id+'/'+token+'">Add To Cart</a>');
	
});

var id = $('.add-to-cart').data('item-id');

var token = $('.add-to-cart').data('token');

$('.add-to-cart').html('<a href="/iShop/products/add_to_cart/1/'+id+'/'+token+'">Add To Cart</a>');