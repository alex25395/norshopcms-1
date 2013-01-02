<!-- TinyMCE -->
<script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="/js/tiny_mce/tinymce_config.js" ></script>
<!-- /TinyMCE -->

<?
if($errors){
	foreach($errors as $error){
	print '<div class="f-message f-message-error">'.$error.'</div>';
	}
}
?>

<form action="" method="post">
	<div class="border">
	<ul>
	<li><br>Название странийы<br><input class="g-8" type="text" name="article_title" value="<?=$data['article_title']?>"><br></li>
	<li>Алиас <br><input class="g-8" type="text" name="article_alias" value="<?=$data['article_alias']?>"><br><br></li>
	<li>
	<textarea class="g-8" id="elm1" name="article_text"><?=htmlspecialchars_decode($data['article_text'])?></textarea>
	</li>
	<li>Описание страницы <br><input class="g-8" type="text" name="article_description" value="<?=$data['article_description']?>"></li>
	<li>Ключевые слова <br><input class="g-8" type="text" name="article_keywords" value="<?=$data['article_keywords']?>"></li>
	<li><br><input class="f-bu" type="submit" name="submit" value=" Сахранить "></li>
	</ul>
	</div>
</form>