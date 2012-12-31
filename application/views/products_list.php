<script>
$(document).ready(function() {

$(function() { 
		$("form.addtocart").submit(function(){
			$.post("/cart/add", $(this).serialize(), function(data){
			});
		  
			return false;
		});
 
}); 

$(function() {
	$(".addcart").keyup(function() {
			
			$.post("/cart/add", $(this.form).serialize(), function(data){
	          //    alert('sended')
			});	
	});
	return false;
}); 
	
	

	$(".addcart").keyup(function() {
	$(this).css("background","#ccc");
	});
 
        
}); 
</script>


<table class="table table-bordered">
<tr><th>Наименовани</th><th width="100">Цена</th><th width="180">&nbsp;</th><tr>
<?foreach($products as $product):?>
<form action="/cart/add" class="addtocart" id="formprod" method="post">
<tr>
	<td><a href="/products/product/<?=$product->id?>"><?=$product->title?></a></td>
	<td><input type="hidden" name="pid" value="<?=$product->id?>"/><b><?=$product->price?></b> руб.</td><td><input class="addcart span1" type="text" name="count" value="1"> <a class="btn" href="/cart/add/<?=$product->id?>">в корзину</a></td>
<tr>
</form>
<?endforeach?>
</table>
<?=$pagination;?>