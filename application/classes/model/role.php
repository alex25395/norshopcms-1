<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends Model_Auth_Role {
	// Relationships

	    protected $_has_many = array(
        'users' => array(
            'model'   => 'user',
            'through' => 'roles_users',
        ),
    );

}