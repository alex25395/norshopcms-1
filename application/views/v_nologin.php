<div id="userarea"><a  data-toggle="modal" href="#myModal" >Войти</a> | <a href="/register">зарегистрироваться</a></div>
<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h3>Вход в Личный Кабинет</h3>
  </div>
  <div class="modal-body">
    <form method="post" action="login" name="login_form">
	<label>Логин</label> <input type="text" id="username" name="username" placeholder="Логин"></li>
    <label>Пароль</label><input type="password" id="password" name="password" placeholder="Пароль"></li>
	<p><input type="submit" class="btn btn-primary" name="submit" value=" Логин " /> <a href="passwordforgot">Забыли пароль?</a></p>
    </form>
  </div>
  <div class="modal-footer">
	Новый пользователь?
    <a href="register" class="btn btn-primary">Register</a>
  </div>
</div>