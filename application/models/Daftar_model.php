<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Daftar_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pendaftar by id
     */
    function get_casis($nisn)
    {
        return $this->db->get_where('tbl_nisn',array('nisn'=>$nisn))->row_array();
    }

    function save_casis_temp($params)
    {
        $this->db->insert('tbl_pendaftar_temp',$params);
        return $this->db->insert_id();
    }

    function get_pendaftar_temp($nisn)
    {
        return $this->db->get_where('tbl_pendaftar_temp',array('nisn'=>$nisn))->row_array();
    }

    function get_pendaftar($nisn)
    {
        return $this->db->get_where('tbl_pendaftar',array('nisn'=>$nisn))->row_array();
    }

    function save_pendaftar($params)
    {
        $this->db->insert('tbl_pendaftar',$params);
        return $this->db->insert_id();
    }
}