<?php
class Login extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();        
        }
        public function authUser($user, $pass)
        {
                $this->db->select('*');
                $this->db->where('username', $user);
                $this->db->where('password', $pass);
                $this->db->where('status', 'ativo');
                $query = $this->db->get('usuarios');
                return $query->result();
        }        

}