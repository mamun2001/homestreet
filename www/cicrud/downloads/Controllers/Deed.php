<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\DeedModel;

class Deed extends BaseController
{
	
    protected $deedModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->deedModel = new DeedModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'deed',
                'title'     		=> 'Deed'				
			];
		
		return view('deed', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->deedModel->select('id, subcontractor_id, project_id, title, file_path, file_type')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->subcontractor_id,
				$value->project_id,
				$value->title,
				$value->file_path,
				$value->file_type,

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
        $fields['subcontractor_id'] = $this->request->getPost('subcontractorId');
        $fields['project_id'] = $this->request->getPost('projectId');
        $fields['title'] = $this->request->getPost('title');
        $fields['file_path'] = $this->request->getPost('filePath');
        $fields['file_type'] = $this->request->getPost('fileType');


        $this->validation->setRules([
            'subcontractor_id' => ['label' => 'Subcontractor id', 'rules' => 'required|numeric|max_length[11]'],
            'project_id' => ['label' => 'Project id', 'rules' => 'required|numeric|max_length[11]'],
            'title' => ['label' => 'Title', 'rules' => 'permit_empty|max_length[100]'],
            'file_path' => ['label' => 'File path', 'rules' => 'required|max_length[250]'],
            'file_type' => ['label' => 'File type', 'rules' => 'permit_empty|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->deedModel->insert($fields)) {
												
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
        $fields['subcontractor_id'] = $this->request->getPost('subcontractorId');
        $fields['project_id'] = $this->request->getPost('projectId');
        $fields['title'] = $this->request->getPost('title');
        $fields['file_path'] = $this->request->getPost('filePath');
        $fields['file_type'] = $this->request->getPost('fileType');


        $this->validation->setRules([
            'subcontractor_id' => ['label' => 'Subcontractor id', 'rules' => 'required|numeric|max_length[11]'],
            'project_id' => ['label' => 'Project id', 'rules' => 'required|numeric|max_length[11]'],
            'title' => ['label' => 'Title', 'rules' => 'permit_empty|max_length[100]'],
            'file_path' => ['label' => 'File path', 'rules' => 'required|max_length[250]'],
            'file_type' => ['label' => 'File type', 'rules' => 'permit_empty|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->deedModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->deedModel->where('id', $id)->delete()) {
								
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