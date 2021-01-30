<?php
class Rekreasi extends Ci_Controller{
	public function index()
	{
		$data['content']='rekreasi/rekreasiV';
		$this->load->view("welcome_message",$data);
	}

	public function detail(){
		$data['content'] ='rekreasi/detail';
		$this->load->view('welcome_message',$data);
	}
	public function form(){
		$data['content'] ='rekreasi/form';
		$this->load->view('welcome_message',$data);
	}
	public function login(){
		$data['content'] ='rekreasi/login';
		$this->load->view('welcome_message',$data);
	}
}




?>
