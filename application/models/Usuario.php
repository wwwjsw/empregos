<?php
class Usuario extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();        
        }
        public function verifyFbUser($id)
        {
                $this->db->select('id_f');
                $this->db->from('usuarios_facebook');
                $this->db->where('fb_id', $id);
                $this->db->limit(1);
                $query = $this->db->get();
                return $query->row('id');
        }
        public function insertFbUser($id, $name)
        {
                $data = array(
                        'fb_id' => $id,
                        'fb_name' => $name
                );

                $query = $this->db->insert('usuarios_facebook', $data);
                return $this->db->insert_id();                
        }        

}