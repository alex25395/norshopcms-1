<form action="/cart/update" method="POST">
<table class="table table-bordered">
<tr><th>Товар</th><th>Цена, руб.</th><th>Сумма, руб.</th><th>Кол-во</th><th>&nbsp;</th></tr>
<?
$total_count = 0;	
$total_price = 0;

if(isset($carts)){
foreach($carts as $cart){

	print  '<tr>
	<td><a href="/products/product/'.$cart->id.'">'.$cart->title.'</a></td>
	<td>'.$cart->price.'</td>
	<td>'.$p_session[$cart->id]*$cart->price.'</td>
	<td><input  class="span1" id="prependedInput" type="text" name="'.$cart->id.'" maxlength="3" value="'.$p_session[$cart->id].'"></td>
	<td><a href="/cart/remove/'.$cart->id.'"><i class="icon-remove"></i>Удалить</a></td></tr>';
	$total_count = $total_count+=$p_session[$cart->id];
	$total_price = $total_price+=$p_session[$cart->id]*$cart->price;
	}
	
	print '<tr><td colspan="3"><b>Итого '.$total_price.' руб.</b> &nbsp; <a href="/cart/emptycart">Очистить корзину</a></td><td>'.$total_count.' шт.</td><td></td></tr>';	
}	
?>

</table>

<br><br>
<table width="100%">
<tr><td><a class="btn btn-primary" href="/">Продолжить покупки</a></td><td><input class="btn btn-inverse" type="submit" name="submit" value="Обновить" /></td><td><a class="btn btn-primary" href="/order">Оформить</a></td></tr>
</table>
</form>