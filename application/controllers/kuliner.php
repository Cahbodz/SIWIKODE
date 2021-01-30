<?php
class Kuliner extends Ci_Controller{
	public function index()
	{
		$data['content']='kuliner/kulinerV';
		$this->load->view("welcome_message",$data);
	}

	public function detail(){
		$data['content'] ='kuliner/detail';
		$this->load->view('welcome_message',$data);
	}
	public function form(){
		$data['content'] ='kuliner/form';
		$this->load->view('welcome_message',$data);
	}
	public function login(){
		$data['content'] ='kuliner/login';
		$this->load->view('welcome_message',$data);
	}
}




?>
