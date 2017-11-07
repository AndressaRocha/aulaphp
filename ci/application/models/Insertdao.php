<?php
    require_once APPPATH."models/serianameable.php";
    class InsertDAO extends CI_Model{
        public function insert(Serianameable $ser){
            //INSERT INTO ...
		    $this->db->insert($ser->getClassName(),$ser->toArray());
	    }
    }
?>