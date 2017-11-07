<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function dashboard(){
		if($this->session->userdata("usuario") !== null){
			$data["nome"] = $this->session->userdata("nome");
			$this->load->view("dashboard",$data);
		}else{
			redirect('/login/form','refresh');
		}
	}
	
	public function form(){
		$data = array();
		$data["msg"] = $this->session->userdata("msg");
		$this->load->view("cadastrousuario",$data);
		$this->session->unset_userdata("msg");
	}
	
	public function cadastro(){
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/usuario.php";
		$usr = new UsuarioModel(0,$nome,$email,$senha);
		//NAO HA CONSTRUTOR NOS DAO'S
		 $this->load->library('session');
		$this->load->model('insertdao');
		$alunodao = $this->insertdao;
		$alunodao->insert($usr);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/usuario/form','refresh');

	}
}

