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
                        'cargo'                 => $cargo
                );

                $this->db->insert('cards', $data);
        }        

}