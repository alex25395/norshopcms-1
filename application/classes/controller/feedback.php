<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Feedback extends Controller_Index {
	
	
	public function action_index()
	{	
	  $feedback = View::factory('v_form_feedback');
      $this->template->block_center = array('feedback'=>$feedback);
	}

	public function action_sendmessage(){
   
   $to = 'email@norshopcms';
   $message = '<br>Контактный телефон '.$_POST['phone'].'<br>';
   $message.= 'Контактный email '.trim($_POST['email']).'<br>';
   $message.= trim($_POST['message']);
   $subject= "Сообщение из сайта";
   $headers = 'MIME-Version: 1.0' . "\r\n";
   $headers.= 'Content-type: text/html; charset=utf8' . "\r\n";
   $headers.= 'From: email@norshopcms' . "\r\n" . 'Reply-To: email@norshopcms' . "\r\n" .  'X-Mailer: PHP/' . phpversion();
   if(isset($_POST['submit'])){
      mail($to, $subject, $message, $headers);
	 
	$this->template->block_center =array("ok"=>'<h3>Спасибо! Ваша сообщение отправлено</h3>');  
	  
   }
   }
} // End 
