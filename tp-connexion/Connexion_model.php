<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion_model extends CI_Model {

	function __construct(){
         parent:: __construct();
    }

    public function add_db($pseudo,$mail,$pwd,$sexe){
         $this->db->set('pseudo',$pseudo);
         $this->db->set('pwd',$pwd);
         $this->db->set('mail',$mail);
         $this->db->set('sexe',$sexe);
         return $this->db->insert('user');
    }
    public function connect($log, $pwd){

        $query = $this->db->where(['pseudo'=>$log, 'pwd'=>$pwd]);
        if ($query == true) {
            return true;
        }else{
            return false;
        }
    }
}