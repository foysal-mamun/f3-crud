<?php

class Controller {

	protected $f3;
	protected $db;

	function beforeroute() {
		$this->f3->set('message','');
	}

	function afterroute() {
		echo Template::instance()->render('layout.htm');	
	}

	function __construct() {

        $f3=Base::instance();

        $db=new DB\SQL(
            $f3->get('db_dns') . $f3->get('db_name'),
            $f3->get('db_user'),
            $f3->get('db_pass')
        );	

		$this->f3=$f3;
		$this->db=$db;
	}
}
