<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserprojectsModel;

class Userprojects extends BaseController
{
	
    protected $userprojectsModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->userprojectsModel = new UserprojectsModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'userprojects',
                'title'     		=> 'UserProjects'				
			];
		
		return view('userprojects', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->userprojectsModel->select('id, userid, projectid, status')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->userid,
				$value->projectid,
				$value->status,

				$ops,
			);
		} 

		return $this->response->setJSON($data);		
	}
	
	public function getOne()
	{
 		$response = array();
		
		$id = $this->request->getPost('id');
		
		if ($this->validation->check($id, 'required|numeric')) {
			
			$data = $this->sourcesModel->where('id' ,$id)->first();

			return $this->response->setJSON($data);	
				
		} else {
			
			throw new \CodeIgniter\Exceptions\PageNotFoundException();

		}	
		
	}	
	
	public function add()
	{

        $response = array();

        $fields['id'] = $this->request->getPost('id');
        $fields['userid'] = $this->request->getPost('userid');
        $fields['projectid'] = $this->request->getPost('projectid');
        $fields['status'] = $this->request->getPost('status');


        $this->validation->setRules([
            'userid' => ['label' => 'Userid', 'rules' => 'required|numeric|max_length[11]'],
            'projectid' => ['label' => 'Projectid', 'rules' => 'required|numeric|max_length[11]'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->userprojectsModel->insert($fields)) {
												
                $response['success'] = true;
                $response['messages'] = 'Data has been inserted successfully';	
				
            } else {
				
                $response['success'] = false;
                $response['messages'] = 'Insertion error!';
				
            }
        }
		
        return $this->response->setJSON($response);
	}

	public function edit()
	{

        $response = array();
		
        $fields['id'] = $this->request->getPost('id');
        $fields['userid'] = $this->request->getPost('userid');
        $fields['projectid'] = $this->request->getPost('projectid');
        $fields['status'] = $this->request->getPost('status');


        $this->validation->setRules([
            'userid' => ['label' => 'Userid', 'rules' => 'required|numeric|max_length[11]'],
            'projectid' => ['label' => 'Projectid', 'rules' => 'required|numeric|max_length[11]'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->userprojectsModel->update($fields['id'], $fields)) {
				
                $response['success'] = true;
                $response['messages'] = 'Successfully updated';	
				
            } else {
				
                $response['success'] = false;
                $response['messages'] = 'Update error!';
				
            }
        }
		
        return $this->response->setJSON($response);
		
	}
	
	public function remove()
	{
		$response = array();
		
		$id = $this->request->getPost('id');
		
		if (!$this->validation->check($id, 'required|numeric')) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException();
			
		} else {	
		
			if ($this->userprojectsModel->where('id', $id)->delete()) {
								
				$response['success'] = true;
				$response['messages'] = 'Deletion succeeded';	
				
			} else {
				
				$response['success'] = false;
				$response['messages'] = 'Deletion error!';
				
			}
		}	
	
        return $this->response->setJSON($response);		
	}	
		
}	