<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SpecModel;

class Spec extends BaseController
{
	
    protected $specModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->specModel = new SpecModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'spec',
                'title'     		=> 'Spec'				
			];
		
		return view('spec', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->specModel->select('id, Code_NutrSpec, NutrSpecification, Short_Name, Unit, Restriction_Type, Value')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->Code_NutrSpec,
				$value->NutrSpecification,
				$value->Short_Name,
				$value->Unit,
				$value->Restriction_Type,
				$value->Value,

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
        $fields['Code_NutrSpec'] = $this->request->getPost('codeNutrSpec');
        $fields['NutrSpecification'] = $this->request->getPost('nutrSpecification');
        $fields['Short_Name'] = $this->request->getPost('shortName');
        $fields['Unit'] = $this->request->getPost('unit');
        $fields['Restriction_Type'] = $this->request->getPost('restrictionType');
        $fields['Value'] = $this->request->getPost('value');


        $this->validation->setRules([
            'Code_NutrSpec' => ['label' => 'Code NutrSpec', 'rules' => 'permit_empty|max_length[7]'],
            'NutrSpecification' => ['label' => 'NutrSpecification', 'rules' => 'permit_empty|max_length[20]'],
            'Short_Name' => ['label' => 'Short Name', 'rules' => 'permit_empty|max_length[8]'],
            'Unit' => ['label' => 'Unit', 'rules' => 'permit_empty|max_length[15]'],
            'Restriction_Type' => ['label' => 'Restriction Type', 'rules' => 'permit_empty|max_length[7]'],
            'Value' => ['label' => 'Value', 'rules' => 'permit_empty'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->specModel->insert($fields)) {
												
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
        $fields['Code_NutrSpec'] = $this->request->getPost('codeNutrSpec');
        $fields['NutrSpecification'] = $this->request->getPost('nutrSpecification');
        $fields['Short_Name'] = $this->request->getPost('shortName');
        $fields['Unit'] = $this->request->getPost('unit');
        $fields['Restriction_Type'] = $this->request->getPost('restrictionType');
        $fields['Value'] = $this->request->getPost('value');


        $this->validation->setRules([
            'Code_NutrSpec' => ['label' => 'Code NutrSpec', 'rules' => 'permit_empty|max_length[7]'],
            'NutrSpecification' => ['label' => 'NutrSpecification', 'rules' => 'permit_empty|max_length[20]'],
            'Short_Name' => ['label' => 'Short Name', 'rules' => 'permit_empty|max_length[8]'],
            'Unit' => ['label' => 'Unit', 'rules' => 'permit_empty|max_length[15]'],
            'Restriction_Type' => ['label' => 'Restriction Type', 'rules' => 'permit_empty|max_length[7]'],
            'Value' => ['label' => 'Value', 'rules' => 'permit_empty'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->specModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->specModel->where('id', $id)->delete()) {
								
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