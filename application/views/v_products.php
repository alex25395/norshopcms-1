<div class="row">
	<div class="span9">

<? foreach($products as $product):?>
<div class="row">
  <div class="span8">
  	<h3><a href="/products/product/<?=$product->id?>"><?=$product->title?></a></h3>
  </div>
  <div class="span3">
  	<a href="/media/products/<?=$product->main_img->name?>"><img width="160" class="img-polaroid" src="/media/products/<?=$product->main_img->name?>"></a>
  </div>
  <div class="span5">
     <p>Артикул: <?=$product->code?></p>
     <p>Производитель: <?=$product->manufactures->title?>
     <p><b>Цена <?=$product->price?> руб. </b></p>
	 <p><a class="btn btn-primary" href="/cart/add/<?=$product->id?>">в корзину</a></p>
  </div>	 
  <div class="span8"><?=substr(strip_tags($product->description), 0, 300)?></div>
</div>
<?endforeach?>

	

<? if(isset($pagination)){echo $pagination;} ?>	
	</div>
</div>

