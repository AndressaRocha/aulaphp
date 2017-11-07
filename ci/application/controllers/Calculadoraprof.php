<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculadora extends CI_Controller {
 
    public function operacao($oper,$n1,$n2){
        $data["res"] = 0;
        if($oper == "soma"){
            $data["res"] = $n1 + $n2;    
        }
        if($oper == "sub"){
            $data["res"] = $n1 - $n2;    
        }
        if($oper == "mult"){
            $data["res"] = $n1 * $n2;    
        }
        $this->load->view('calc',$data);
        
    }
}