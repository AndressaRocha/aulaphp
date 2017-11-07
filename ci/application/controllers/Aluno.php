<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	//
	//MOSTRA O FORMULARIO
	public function mostrarForm(){
		$data = array();
		$data["msg"] = $this->session->userdata("msg");
		$this->load->view('alunoform',$data);
		$this->session->unset_userdata("msg");
	}
	//ENVIA O ALUNO AO BANCO
	public function cadastrar(){
		// $_POST["nome"]
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		require_once APPPATH."models/aluno.php";
		$alu = new Aluna(0,$nome,$email);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$alunodao = $this->insertdao;
		$alunodao->insert($alu);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/aluno/','refresh');
	}
}

