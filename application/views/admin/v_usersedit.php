<?
if($errors){
	foreach($errors as $error){
		if(is_array($error)){
		foreach($error as $e){print '<div class="f-message f-message-error">'.$e.'</div>';}
		}
		else {print '<div class="f-message f-message-error">'.$error.'</div>';}
	}
}
?>
<div id="users">
<form method="post" action="">
<?
print '<ul><li>Логин: <input class="g-4" type="text" name="username" value="'.$users->username.'"></li>
<li>Проль <span class="required">*</span> <input class="g-4" type="password" name="password" ></li>
<li>Павторить пароль <span class="required">*</span> <input class="g-4" type="password" name="password_confirm"></li>
<li>Имя Фамилия <span class="required">*</span> <input class="g-4" type="text" name="first_name" value="'.$users->first_name.'"></li>
<li>Email <span class="required">*</span> <input class="g-4" type="text" name="email" value="'.$users->email.'"></li>
<li>Телефон: <span class="required">*</span> <input class="g-4" type="text" name="phone" value="'.$users->phone.'"></li>
<li>Статус <input type="checkbox" name="status" value="1" ></li>
<li><input class="f-bu" type="submit" name="submit" value=" Сохранить "></li>
</ul>';
?>
</form>
</div>