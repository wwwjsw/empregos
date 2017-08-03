<?php
class Administrativo extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();        
        }
        //conta registros para a paginação
        public function record_count($tipo = NULL)
        {
                if(isset($tipo))
                {
                        $this->db->where('tipo', $tipo);
                }                
                return $this->db->count_all_results("cards");
        }
        //retorna resutados da paginação                
        public function fetch_data($limit, $range, $tipo = NULL){
                $this->db->join('usuarios_facebook', 'cards.facebook = usuarios_facebook.id_f', 'inner');
                $this->db->order_by('cards.id', 'DESC');
                if(isset($tipo))
                {
                        $this->db->where('cards.tipo', $tipo);
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