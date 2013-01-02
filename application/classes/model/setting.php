<?php defined('SYSPATH') or die('No direct script access.');

class Model_Setting extends ORM {
protected $_primary_key = 'setting_id';

	public function rules()
    {
        return array(
            'url' => array(
                array('not_empty'),
            ),
            'title' => array(
                array('not_empty'),
            ),
			'email' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 127)),
				array('email'),
			),
        );


    }

}
