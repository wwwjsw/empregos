<?php
class Actions extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     *
     * BLOCK card SQL.
     *
     */
    public function block($id)
    {
        $this->db->set('block', TRUE);
        $this->db->where('id', $id);
        if($this->db->update('cards'))
        {
            return TRUE;
        }
    }
    /**
     *
     * UNBLOCK card SQL.
     *
     */
    public function unblock($id)
    {
        $this->db->set('block', FALSE);
        $this->db->where('id', $id);
        if($this->db->update('cards'))
        {
            return TRUE;
        }
    }
    /**
     *
     * DELETE card SQL.
     *
     */
    public function delete($id)
    {
        $this->db->where('id', $id);
        if($this->db->delete('cards')){
            return TRUE;
        }
    }
    /**
     *
     * ADS card SQL.
     *
     */
    public function ads($id)
    {
        $this->db->set('is_ad', TRUE);
        $this->db->where('id', $id);
        if($this->db->update('cards'))
        {
            return TRUE;
        }
    }
    /**
     *
     * REMOVE ADS card SQL.
     *
     */
    public function removeAds($id)
    {
        $this->db->set('is_ad', FALSE);
        $this->db->where('id', $id);
        if($this->db->update('cards'))
        {
            return TRUE;
        }
    }
    /**
     *
     * EDIT card SQL.
     *
     */
    public function edit($id)
    {

    }
}