<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_user extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_user_model');
    } 

    /*
     * Listing of tb_user
     */
    function index()
    {
        $data['tb_user'] = $this->Tb_user_model->get_all_tb_user();
        
        $data['_view'] = 'tb_user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tb_user
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'level_user' => $this->input->post('level_user'),
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
				'nama_user' => $this->input->post('nama_user'),
				'alamat_user' => $this->input->post('alamat_user'),
				'kode_level' => $this->input->post('kode_level'),
				'no_hp_user' => $this->input->post('no_hp_user'),
            );
            
            $tb_user_id = $this->Tb_user_model->add_tb_user($params);
            redirect('tb_user/index');
        }
        else
        {            
            $data['_view'] = 'tb_user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tb_user
     */
    function edit($id)
    {   
        // check if the tb_user exists before trying to edit it
        $data['tb_user'] = $this->Tb_user_model->get_tb_user($id);
        
        if(isset($data['tb_user']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'level_user' => $this->input->post('level_user'),
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'nama_user' => $this->input->post('nama_user'),
					'alamat_user' => $this->input->post('alamat_user'),
					'kode_level' => $this->input->post('kode_level'),
					'no_hp_user' => $this->input->post('no_hp_user'),
                );

                $this->Tb_user_model->update_tb_user($id,$params);            
                redirect('tb_user/index');
            }
            else
            {
                $data['_view'] = 'tb_user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tb_user you are trying to edit does not exist.');
    } 

    /*
     * Deleting tb_user
     */
    function remove($id)
    {
        $tb_user = $this->Tb_user_model->get_tb_user($id);

        // check if the tb_user exists before trying to delete it
        if(isset($tb_user['id']))
        {
            $this->Tb_user_model->delete_tb_user($id);
            redirect('tb_user/index');
        }
        else
            show_error('The tb_user you are trying to delete does not exist.');
    }
    
}
