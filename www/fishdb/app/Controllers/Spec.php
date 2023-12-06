<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SpecModel;
use App\Models\SpeciesTypeModel;
use App\Models\SpeciesModel;
use App\Models\ProductionSystemModel;
use App\Models\StageWeightModel;
use App\Models\TargetMoistureModel;

class Spec extends BaseController
{
	
    protected $specModel;
	protected $speciesTypeModel;
	protected $speciesModel;
	protected $productionSystemModel;
	protected $stageWeightModel;
	protected $targetMoistureModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->specModel = new SpecModel();
		$this->speciesTypeModel = new SpeciesTypeModel();
		$this->speciesModel = new SpeciesModel();
		$this->productionSystemModel = new ProductionSystemModel();
		$this->stageWeightModel = new StageWeightModel();
		$this->targetMoistureModel = new TargetMoistureModel();
		
       	$this->validation =  \Config\Services::validation();
		
		$this->db = \Config\Database::connect();
	}
	
	public function index()
	{	
	    $data = [
                'controller'    	=> 'spec',
                'title'     		=> 'Spec'				
			];
		
		//get species type
		$result = $this->speciesTypeModel->select('id, species_type')->findAll();		
		foreach ($result as $key => $value) {		
			$data['species_type'][$value->id] = $value->species_type;
		}
		
		//get species
		$result = $this->speciesModel->select('id, species')->findAll();		
		foreach ($result as $key => $value) {		
			$data['species'][$value->id] = $value->species;
		}
		
		//get production system
		$result = $this->productionSystemModel->select('id, production_system')->findAll();		
		foreach ($result as $key => $value) {		
			$data['production_system'][$value->id] = $value->production_system;
		}
		
		//get stage weight
		$result = $this->stageWeightModel->select('id, stage_weight')->findAll();		
		foreach ($result as $key => $value) {		
			$data['stage_weight'][$value->id] = $value->stage_weight;
		}
		
		//get target moisture
		$result = $this->targetMoistureModel->select('id, target_moisture_level')->findAll();		
		foreach ($result as $key => $value) {		
			$data['target_moisture_level'][$value->id] = $value->target_moisture_level;
		}
		
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
	
	public function getMatched()
	{
 		$response = array();
		$data['data'] = array();
				
		$species_type = $this->request->getPost('species_type');				
		$species = $this->request->getPost('species');
		$production_system = $this->request->getPost('production_system');
		$stage_weight = $this->request->getPost('stage_weight');
		$target_moisture_level = $this->request->getPost('target_moisture');	
				
		$builder = $this->db->table('spec');
		       
		$builder = $builder->where(array(
				'species_type' => $species_type,
				'species' => $species,
				'production_system' => $production_system,
				'stage_weight' => $stage_weight,
				'target_moisture_level' => $target_moisture_level
			));
		
		$result = $builder->get()->getResult(); 

		//$sql = $this->db->getLastQuery();			
		
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
			
			$data = $this->specModel->where('id' ,$id)->first();

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
        $fields['species_type'] = $this->request->getPost('species_type');
        $fields['species'] = $this->request->getPost('species');
        $fields['production_system'] = $this->request->getPost('production_system');
        $fields['stage_weight'] = $this->request->getPost('stage_weight');
        $fields['target_moisture_level'] = $this->request->getPost('target_moisture');

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