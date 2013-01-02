<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" lang="ru"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="ru"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="ru"><![endif]-->
<!--[if gt IE 8]><!--><html lang="ru"><!--<![endif]-->
<head>
<title><?=$title; ?> <?=$page_title; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?=$keywords?>" />
<meta name="description" content="<?=$description; ?>" />
<base href="<?=$url?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<?foreach ($styles as $file_style):?>
<?=html::style($file_style)?>
<?endforeach?>
<?foreach ($scripts as $file_script):?>
<?=html::script($file_script)?>
<?endforeach?>
<script src="/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span12"><?=$top_menu?></div>
	</div>
	<div class="row">
		<div class="span8"><?=$search_form?></div>
		<div class="span4"><?=$userarea?></div>
	</div>
	
	<div class="row">
		<div class="span3"><? if($block_left) { foreach($block_left as $lblock){print $lblock;} }?><?=$minicart?></div>
		<div class="span9"><? if($block_center){ foreach($block_center as $bcenter){print $bcenter;} }?></div>
	</div>

</div>

</body>
</html>
