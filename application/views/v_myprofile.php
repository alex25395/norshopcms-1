<div class="row">
	<div class="span6">
<?
if($errors){
	foreach($errors as $error){
	print '<div class="alert alert-error">'.$error.'</div>';
	}
}
?>
<h3>Персональные данные</h3>
<form method="post" action="">
<table>
<?
$str = '<tr>
          <td>Имя, Отчество: <span class="required"> * </span></td>
          <td><input type="text" name="first_name" value="'.$user->first_name.'">
            </td>
        </tr>
		<tr>
          <td>E-Mail:<span class="required"> * </span></td>
          <td><input type="text" name="email" value="'.$user->email.'">
            </td>
        </tr>
		<tr>
          <td>Телефон:<span class="required"> * </span></td>
          <td><input type="text" name="phone" value="'.$user->phone.'"></td>
		 </tr> 
		<tr>
		<tr><td>Адрес </td><td><input type="text" name="address" value="'.$user->address.'"></td></tr>
		  <td colspan="2"><input class="btn btn-primary" type="submit" name="submit" value=" Сохранить "></td>
       </tr>';
		
print $str;		

?>
</table>
</form>
	</div>
</div>