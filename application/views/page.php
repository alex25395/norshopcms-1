<?foreach($pages as $page):?>
<h1><?=$page['page_title']?></h1>
<?=htmlspecialchars_decode($page['page_text'])?>
<?endforeach?>