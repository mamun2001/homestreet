<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SubcontractorfilesModel;

class Subcontractorfiles extends BaseController
{
	
    protected $subcontractorfilesModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->subcontractorfilesModel = new SubcontractorfilesModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'subcontractorfiles',
                'title'     		=> 'Subcontractor Files'				
			];
		
		return view('subcontractorfiles', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->subcontractorfilesModel->select('id, subcontractorid, title, filepath, filetype')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->subcontractorid,
				$value->title,
				$value->filepath,
				$value->filetype,

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
        $fields['subcontractorid'] = $this->request->getPost('subcontractorid');
        $fields['title'] = $this->request->getPost('title');
        $fields['filepath'] = $this->request->getPost('filepath');
        $fields['filetype'] = $this->request->getPost('filetype');


        $this->validation->setRules([
            'subcontractorid' => ['label' => 'Subcontractorid', 'rules' => 'required|numeric|max_length[11]'],
            'title' => ['label' => 'Title', 'rules' => 'required|max_length[250]'],
            'filepath' => ['label' => 'Filepath', 'rules' => 'required|max_length[500]'],
            'filetype' => ['label' => 'Filetype', 'rules' => 'required|max_length[250]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->subcontractorfilesModel->insert($fields)) {
												
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
        $fields['subcontractorid'] = $this->request->getPost('subcontractorid');
        $fields['title'] = $this->request->getPost('title');
        $fields['filepath'] = $this->request->getPost('filepath');
        $fields['filetype'] = $this->request->getPost('filetype');


        $this->validation->setRules([
            'subcontractorid' => ['label' => 'Subcontractorid', 'rules' => 'required|numeric|max_length[11]'],
            'title' => ['label' => 'Title', 'rules' => 'required|max_length[250]'],
            'filepath' => ['label' => 'Filepath', 'rules' => 'required|max_length[500]'],
            'filetype' => ['label' => 'Filetype', 'rules' => 'required|max_length[250]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->subcontractorfilesModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->subcontractorfilesModel->where('id', $id)->delete()) {
								
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