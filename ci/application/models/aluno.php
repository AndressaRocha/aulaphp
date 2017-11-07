<?php
    //REPRESENTA A TABELA ALUNO
    require_once APPPATH."models/serializable.php";
    require_once APPPATH."models/nameable.php";
    class Aluna implements Serializablee, Nameable{
        private $id, $nome, $email;
        
        public function __construct($id, $nome, $email){
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
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
        
        //toArray DEVERA EXISTIR PARA TODAS AS TABELAS!
        //@Override
        public function toArray(){
            $aux = array();
            $aux["id"] = $this->id;
            $aux["nome"] = $this->nome;
            $aux["email"] = $this->email;
            return $aux;
        }
        
        public function getClassName(){
            return "Aluno";
        }
    }
?>