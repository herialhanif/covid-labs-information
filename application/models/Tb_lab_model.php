<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_lab_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_lab by id_lab
     */
    function get_tb_lab($id_lab)
    {
        return $this->db->get_where('tb_lab',array('id_lab'=>$id_lab))->row_array();
    }
        
    /*
     * Get all tb_lab
     */
    function get_all_tb_lab()
    {
        $this->db->order_by('id_lab', 'desc');
        return $this->db->get('tb_lab')->result_array();
    }
        
    /*
     * function to add new tb_lab
     */
    function add_tb_lab($params)
    {
        $this->db->insert('tb_lab',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_lab
     */
    function update_tb_lab($id_lab,$params)
    {
        $this->db->where('id_lab',$id_lab);
        return $this->db->update('tb_lab',$params);
    }
    
    /*
     * function to delete tb_lab
     */
    function delete_tb_lab($id_lab)
    {
        return $this->db->delete('tb_lab',array('id_lab'=>$id_lab));
    }
}