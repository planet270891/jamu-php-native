<?php

class Home {

	public function index(){
		require_once(PATH.'views/home/'.__FUNCTION__.'.php');
	}

}


$home = new Home();
$home->index();