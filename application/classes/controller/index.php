<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {

    public $p_session;
    public $payment;

	public function before(){
	    parent::before();
        $this->p_session = $this->session->get('products');

		//===Вывод в шаблон мета теги стили и скрипти==========================
		$s = ORM::factory('setting',1);

		$this->template->title = $s->title;
		$this->template->description = $s->meta_description;
		$this->template->keywords = $s->meta_keywords;
		$this->template->url = $s->url;
		
		$this->template->scripts[] = 'js/jquery-1.8.3.min.js';
		//$this->template->scripts[] = 'js/nivoslider/jquery.nivo.slider.js';
        //$this->template->scripts[] = 'js/view_images.js';
        
		//JavaScripts для superfish меню (верхный меню)
		//$this->template->scripts[] = 'js/tabs.js';
		//$this->template->scripts[] = 'js/superfish.js';
				
       // $this->template->styles[] = 'themes/nivo-slider.css';
		//$this->template->styles[] = 'themes/css/980_grid.css';
		//$this->template->styles[] = 'themes/css/framework.css';
		//$this->template->styles[] = 'themes/css/style.css';

		//получаем верхный меню и вызываем в блоке top_menu ========================
		$menus = ORM::factory('menu')->find_all();
		$top_menu = View::factory('v_top_menu',array('menus'=>$menus));
		
	   //=======Вывод раздела ползоваелей можно вызват блоках или отдельно========
		if($this->auth->logged_in()) {
			$user = $this->auth->get_user();
			$userarea = View::factory('v_userarea')->bind('user',$user);
			
        }else{
		$userarea = View::factory('v_nologin');
		}
		//=======================================================================

		
		////=======собираем мимни корзину  можно вызват блоках или отдельно =====
        $carts = ORM::factory('product');
        if($this->p_session != Null){
			foreach($this->p_session as $id=>$count){

			$carts->or_where('id', 'IN', array($id));
			}
			$carts = $carts->find_all();
            $this->payment = $carts;
		}
		else{
		$carts = null;
		}

		$minicart = View::factory('v_minicart', array(
            'carts' => $carts, 'p_session'=>$this->p_session
        ));
		//===================================================================================
		
			
		
		//Получаем категории товаров можно вызвать в блоках или отдельно ====================
		$categories = ORM::factory('category')->fulltree()->as_array();
		$catalog_products = View::factory('v_categories')->bind('categories', $categories);
		//===================================================================================
		
		//=============  вывод поизводителей можно вызвать в блоках или отдельно ============
		$manufactures = ORM::factory('manufactures')->find_all();
		$manufactures = View::factory('v_manufactures',array('manufactures' => $manufactures));
		///=========================================================================
		
		//========= вывод паследние добавленыые товары можно вызвать в блоках или отдельно ==
		$last_products = ORM::factory("product")->limit(30)->find_all()->as_array();
		$last_products = View::factory('v_products', array('products'=>$last_products));
		//===================================================================================

		//====Подключение блоков ============================================================
		$this->template->top_menu = $top_menu;
		$this->template->minicart = $minicart;
		$this->template->userarea = $userarea;
		//$this->template->manufactures = $manufactures;
		//$this->template->last_products = $last_products;
		$this->template->search_form = View::factory('v_searchform');
	   	$this->template->block_left = array('catalog_products'=>$catalog_products);
		$this->template->block_center = array('last_products'=>$last_products);
		//========================================================================
	}

	public function action_index()
	{
	$banners = ORM::factory('banner')->find_all();
    $this->template->slider_banner = View::factory('v_banner', array('banners'=>$banners));

   }

} // End 

