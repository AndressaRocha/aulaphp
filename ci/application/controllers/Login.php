<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function form(){
		$this->load->view("login");
	}
	
	public function sair(){
		$this->session->unset_userdata("usuario");
		redirect('/login/form','refresh');
	}
	
	public function auth(){
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/usuario.php";
		$this->load->model('usuariodao');
		$usrdao = $this->usuariodao;
		$usuario = $usrdao->getUser($email,$senha);
		if(isset($usuario)){
			$this->session->set_userdata("usuario",$usuario->getNome());
			redirect('/usuario/dashboard','refresh');			
		}else{
		redirect('/login/form','refresh');
        }
	}
}

