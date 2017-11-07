<?php
    //REPRESENTA A TABELA ALUNO
    require_once APPPATH."models/serializable.php";
    require_once APPPATH."models/nameable.php";
    class UsuarioModel implements Serializablee, Nameable{
        private $id, $nome, $email, $senha;
        
        public function __construct($id, $nome, $email, $senha){
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }
        
        public function getId(){
            return $this->id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        //toArray DEVERA EXISTIR PARA TODAS AS TABELAS!
        //@Override
        public function toArray(){
            $aux = array();
            $aux["id"] = $this->id;
            $aux["nome"] = $this->nome;
            $aux["email"] = $this->email;
            $aux["senha"] = $this->senha;
            return $aux;
        }
        
        public function getClassName(){
            return "Usuario";
        }
        
        public function isAdmin(){
            if($this->email == "root@root.com" && $this->senha == "root")
                return true;
            else 
                return false;
        }
    }
?>