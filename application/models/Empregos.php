<?php
class Empregos extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();        
        }
        public function getEmpregos()
        {
                $this->db->select('*');
                $this->db->order_by('nome_cargo', 'ASC');
                $query = $this->db->get('empregos');
                return $query->result();
        }
        public function addEmpregos($cargo)
        {
            $data = array(
                'nome_cargo' => $cargo
            );

            $this->db->insert('empregos', $data);
        }
        public function removeEmpregos($id)
        {
            if($this->db->delete('empregos', array('id_cargo' => $id))){
                return TRUE;
            }
        }
}