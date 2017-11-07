<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculadora extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}
	
	public function operacao($n1,$n2){
		
		echo "<h1>SOMA</h1>"; 
		echo $n1+$n2;
		echo "<h1>SUBTRAÇÃO</h1>"; 
		echo $n1-$n2;
	    echo "<h1>MULTIPLICAÇÃO</h1>"; 
		echo $n1*$n2;
		echo "<h1>DIVISÃO</h1>"; 
		echo $n1/$n2;
	}
	
}

