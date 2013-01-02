<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_System extends Controller_Admin_Index{

	public function before()
	{
		parent::before();
		//Вывод в шаблон
		$this->template->page_title = 'Система';
	}

	public function action_index(){
		$this->template->block_center = View::factory('/admin/v_system');
	}	

public function action_settings(){
		$s = ORM::factory('setting',1);
		if(!$s->loaded()){
				$this->request->redirect('/admin/system');
		}
		if(isset($_POST['submit'])){

			$data = Arr::extract($_POST, array('title', 'url', 'email', 'meta_description', 'meta_keywords'));
		
			$s->values($data);
				
			try{
					$s->save();
					$this->request->redirect('/admin/system/settings');
			}
			catch(ORM_Validation_Exception $e){
					$errors = $e->errors('setting');
			}

		}
		$settings = ORM::factory('setting',1);
		$content = View::factory('/admin/v_settings', array('settings'=>$settings))
					->bind('errors', $errors)
					->bind('data',$data);
		
	
		$this->template->block_center = $content ;
	
	}
		
}