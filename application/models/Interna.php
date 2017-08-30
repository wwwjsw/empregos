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
    public function cardRelate()
    {
        $this->db->join('usuarios_facebook', 'cards.facebook = usuarios_facebook.id_f', 'inner');
        $this->db->order_by('cards.is_ad', 'DESC');
        $this->db->order_by('cards.id', 'DESC');
        $this->db->where('cards.block', false);
        $this->db->limit(4);
        $query = $this->db->get('cards');
        return $query->result();
    }
}