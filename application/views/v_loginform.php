<div class="row">
	<div class="span6">

<?if($errors):?>
	<?foreach ($errors as $error):?>
	<div class="alert alert-error"><?=$error?></div>
	<?endforeach?>
<?endif?>
<h3>Вход в Личный Кабинет</h3>
<form class="form-horizontal" action="/login" method="post">
  <fieldset>
    <div id="legend">
      <legend class="">Авторизация</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Логин</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Логин">
      </div>
    </div>

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Пароль</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Пароль">
      </div>
    </div>


    <div class="control-group">
      <!-- Button -->
      <div class="controls">
		<input class="btn btn-primary" type="submit" name="submit" value="  Вход  " /> <a href="passwordforgot">Забыли пароль?</a> <a href="/register">Регистрация</a>
      </div>
    </div>
  </fieldset>
</form>	
	</div>
</div>