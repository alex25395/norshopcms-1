<ul class="thumbnails">
<?foreach($products as $product):?>
<li class="span2">
   <div class="thumbnail">
	<a href="/media/products/<?=$product->main_img->name?>"><img style="height: 100px;"  class="image" src="/media/products/<?=$product->main_img->name?>"></a>
	<h4><a href="/products/product/<?=$product->id?>"><?=substr($product->title, 0, 50)?></a></h2>
	<p>ID: <?=$product->code?></p>
	<p><b>Цена <?=$product->price?> руб.</b></p>
	<p><a class="btn btn-primary" href="/cart/add/<?=$product->id?>">в корзину</a></p>
  </div>
 </li>
<?endforeach?>
</ul>
<?=$pagination;?>

   
 
 
