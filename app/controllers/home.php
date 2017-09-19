<?php

class Home extends Controller{
	public function index($name = ""){
		$this->view('home/index', ['name' => $name]);
	}
	public function indexParams($name = "", $otherName = ""){
		User::find(1)->username;
		echo $name . ' ' . $otherName;
	}
	public function create($username = "", $email = ""){
		User::create([
			'username' => 'alex',
			'email' => 'alex@gmail.com',
		]);
	}
	public function test(){
		echo "test";
	}
}