<div class="row">
<div class="span8">
<h3><?=$product->title?></h3>

        <?if(count($images) > 0):?>
      
          <a href="media/products/<?=$product->main_img->name?>" target="_blank"><img class="image img-polaroid" src="media/products/<?=$product->main_img->name?>"></a>
            <p>Производитель: <?=$product->manufactures->title?></p>
            <p><b>Цена <?=$product->price?> руб. </b></p><p><a  class="btn btn-primary" href="/cart/add/<?=$product->id?>">в корзину</a></p>
            
			<div class="images">
            <?foreach($images as $image):?>
			<img class="img-polaroid" width="150" src="/media/products/<?=$image->name?>">
            <?endforeach?>
           </div>
        <?else:?>
        <div id="main_icon">
            <img src="media/img/noimage.jpg" />
        </div>
         <?endif?>
	</div>
</div>
<div><?=$product->description?></div>