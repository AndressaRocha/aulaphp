<?php
    require_once APPPATH."models/serianameable.php";
    class UsuarioDAO extends CI_Model{
        
        public function getUser($email,$senha){
            //SELECT * FROM Usuario WHERE
            //email = $email AND senha = $senha 
            $this->db->where('email',$email);
		    $this->db->where('senha',$senha);
		    $usr = $this->db->get('Usuario');
		    require_once APPPATH."models/usuario.php";
		    if ($usr->num_rows()>0){
		        $id = $usr->res()->id;
		        $nome = $usr->res()->nome;
		        $emailUsu = $usr->res()->email;
		        $senhaUsu = $usr->res()->email;
		        return new Usuario($id,$nome,$emailUsu,$senhaUsu);
            }else{
                return null;
            }
    
        }
    }
?>