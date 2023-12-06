<?php 
namespace App\Controllers;

use App\Controllers\BaseController;

class AddMoreController extends BaseController{
    
    public function __construct()
	{	    
       	$this->validation =  \Config\Services::validation();		
	}

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index()
    {
        //$this->load->view('addMore');
        return view('addmore');        
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function storePost()
    {
        if(!empty($this->input->post('addmore'))){

            foreach ($this->input->post('addmore') as $key => $value) {
                $this->db->insert('tagslist',$value);
            }
            
        }

        print_r('Record Added Successfully.');
    }

}