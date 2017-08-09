<?php
class Pesquisa extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();        
        }
        //conta registros para a paginação
        public function record_count($cargo = NULL)
        {
                $this->db->where('block', FALSE);
                if(isset($cargo))
                {
                        $this->db->where('cargo', $cargo);
                }                
                return $this->db->count_all_results("cards");
        }
        //retorna resutados da paginação                
        public function fetch_data($limit, $range, $cargo = NULL){
                $this->db->join('usuarios_facebook', 'cards.facebook = usuarios_facebook.id_f', 'inner');
                $this->db->order_by('cards.is_ad', 'DESC');
                $this->db->order_by('cards.id', 'DESC');
                if(isset($cargo))
                {
                        $this->db->where('cards.cargo', $cargo);
                }
                $this->db->limit($limit, $range);
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