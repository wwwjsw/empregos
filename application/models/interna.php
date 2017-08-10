<?php
class Interna extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //retorna dados do card
    public function cardData($id)
    {
        $this->db->where('cards.id', $id);
        $this->db->join('usuarios_facebook', 'cards.facebook = usuarios_facebook.id_f', 'inner');
        $query = $this->db->get('cards');
        return $query->result();
    }
}