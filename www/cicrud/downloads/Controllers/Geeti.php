<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GeetiModel;

class Geeti extends BaseController
{
	
    protected $geetiModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->geetiModel = new GeetiModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'geeti',
                'title'     		=> 'Geeti'				
			];
		
		return view('geeti', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->geetiModel->select('id, title, raag, taal, body')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->title,
				$value->raag,
				$value->taal,
				$value->body,

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
        $fields['title'] = $this->request->getPost('title');
        $fields['raag'] = $this->request->getPost('raag');
        $fields['taal'] = $this->request->getPost('taal');
        $fields['body'] = $this->request->getPost('body');


        $this->validation->setRules([
            'title' => ['label' => 'Title', 'rules' => 'required|max_length[250]'],
            'raag' => ['label' => 'Raag', 'rules' => 'permit_empty|max_length[250]'],
            'taal' => ['label' => 'Taal', 'rules' => 'permit_empty|max_length[250]'],
            'body' => ['label' => 'Body', 'rules' => 'required'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->geetiModel->insert($fields)) {
												
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
        $fields['title'] = $this->request->getPost('title');
        $fields['raag'] = $this->request->getPost('raag');
        $fields['taal'] = $this->request->getPost('taal');
        $fields['body'] = $this->request->getPost('body');


        $this->validation->setRules([
            'title' => ['label' => 'Title', 'rules' => 'required|max_length[250]'],
            'raag' => ['label' => 'Raag', 'rules' => 'permit_empty|max_length[250]'],
            'taal' => ['label' => 'Taal', 'rules' => 'permit_empty|max_length[250]'],
            'body' => ['label' => 'Body', 'rules' => 'required'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->geetiModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->geetiModel->where('id', $id)->delete()) {
								
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