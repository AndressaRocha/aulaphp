<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}
	
	public function ola($nome,$nome2){
		//$_GET["$1"]
		echo $nome . " ";
		echo $nome2;
		$this->load->view('ola');
	}
}

?>