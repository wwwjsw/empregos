<?php
class Card extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();        
        }
        public function SaveCard($id,$tipo,$clt,$diaria,$odontologico,$vida,$alimentacao,$saude,$comissao,$vt,$numero,$cor,$cargo)
        {
                $data = array(
                        'is_ad'                 => FALSE,
                        'facebook'              => $id,
                        'tipo'                  => $tipo,
                        'beneficios_clt'        => $clt,
                        'beneficios_diaria'     => $diaria,
                        'beneficios_odonto'     => $odontologico,
                        'beneficios_vida'       => $vida,
                        'beneficios_alimentacao'=> $alimentacao,
                        'beneficios_saude'      => $saude,
                        'beneficios_comissao'   => $comissao,
                        'beneficios_vt'         => $vt,
                        'numero'                => $numero,
                        'cor'                   => $cor,
                        'cargo'                 => $cargo,
                        'block'                 => FALSE
                );

                $this->db->insert('cards', $data);
        }
        //conta registros para a paginação
        public function record_count()
        {
                $this->db->where('block', FALSE);
                $this->db->where('tipo', 'vaga');
                return $this->db->count_all("cards");
        }
        //retorna resutados da paginação                
        public function fetch_data($limit, $range){
                $this->db->join('usuarios_facebook', 'cards.facebook = usuarios_facebook.id_f', 'inner');
                $this->db->order_by('cards.is_ad', 'DESC');
                $this->db->order_by('cards.id', 'DESC');
                $this->db->limit($limit, $range);
                //$this->db->where('id', $id);
                $query = $this->db->get("cards");
                if ($query->num_rows() > 0) 
                {
                        foreach ($query->result() as $row) 
                        {
                                $data[] = $row;
                        }
                        return $data;
                }
                return false;
        }               
}