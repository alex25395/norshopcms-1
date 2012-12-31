<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		<div class="nav-collapse collapse">
				<ul class="nav">
<?foreach($menus as $m):?>
<? if($m->menu_type=='url'):?>
<li><a href="/<?=$m->menu_alias?>"><?=$m->menu_title?></a></li>
<li class="divider-vertical"></li>
<?else:?>
	<li><a href="/<?=$m->menu_type?>/<?=$m->menu_alias?>"><?=$m->menu_title?></a></li>
	<li class="divider-vertical"></li>
<?endif?>	
<?endforeach?>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
<!--/.navbar -->
