<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_pasien_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_pasien by id_pasien
     */
    function get_tb_pasien($id_pasien)
    {
        return $this->db->get_where('tb_pasien',array('id_pasien'=>$id_pasien))->row_array();
    }
        
    /*
     * Get all tb_pasien
     */
    function get_all_tb_pasien()
    {
        $this->db->order_by('id_pasien', 'desc');
        return $this->db->get('tb_pasien')->result_array();
    }
        
    /*
     * function to add new tb_pasien
     */
    function add_tb_pasien($params)
    {
        $this->db->insert('tb_pasien',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_pasien
     */
    function update_tb_pasien($id_pasien,$params)
    {
        $this->db->where('id_pasien',$id_pasien);
        return $this->db->update('tb_pasien',$params);
    }
    
    /*
     * function to delete tb_pasien
     */
    function delete_tb_pasien($id_pasien)
    {
        return $this->db->delete('tb_pasien',array('id_pasien'=>$id_pasien));
    }
}