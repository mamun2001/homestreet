<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProjectsModel;

class Projects extends BaseController
{
	
    protected $projectsModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->projectsModel = new ProjectsModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'projects',
                'title'     		=> 'Projects'				
			];
		
		return view('projects', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->projectsModel->select('id, project_name, project_location, tender_id, bid_amount, security_money, bank, duration, time, start_date, end_date, status')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->project_name,
				$value->project_location,
				$value->tender_id,
				$value->bid_amount,
				$value->security_money,
				$value->bank,
				$value->duration,
				$value->time,
				$value->start_date,
				$value->end_date,
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
        $fields['project_name'] = $this->request->getPost('projectName');
        $fields['project_location'] = $this->request->getPost('projectLocation');
        $fields['tender_id'] = $this->request->getPost('tenderId');
        $fields['bid_amount'] = $this->request->getPost('bidAmount');
        $fields['security_money'] = $this->request->getPost('securityMoney');
        $fields['bank'] = $this->request->getPost('bank');
        $fields['duration'] = $this->request->getPost('duration');
        $fields['time'] = $this->request->getPost('time');
        $fields['start_date'] = $this->request->getPost('startDate');
        $fields['end_date'] = $this->request->getPost('endDate');
        $fields['status'] = $this->request->getPost('status');


        $this->validation->setRules([
            'project_name' => ['label' => 'Project name', 'rules' => 'permit_empty|max_length[250]'],
            'project_location' => ['label' => 'Project location', 'rules' => 'required|numeric|max_length[11]'],
            'tender_id' => ['label' => 'Tender id', 'rules' => 'required|max_length[8]'],
            'bid_amount' => ['label' => 'Bid amount', 'rules' => 'required|numeric|max_length[12]'],
            'security_money' => ['label' => 'Security money', 'rules' => 'required'],
            'bank' => ['label' => 'Bank', 'rules' => 'required|max_length[50]'],
            'duration' => ['label' => 'Duration', 'rules' => 'required|numeric|max_length[11]'],
            'time' => ['label' => 'Time', 'rules' => 'required|max_length[5]'],
            'start_date' => ['label' => 'Start date', 'rules' => 'required|valid_date'],
            'end_date' => ['label' => 'End date', 'rules' => 'required|valid_date'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->projectsModel->insert($fields)) {
												
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
        $fields['project_name'] = $this->request->getPost('projectName');
        $fields['project_location'] = $this->request->getPost('projectLocation');
        $fields['tender_id'] = $this->request->getPost('tenderId');
        $fields['bid_amount'] = $this->request->getPost('bidAmount');
        $fields['security_money'] = $this->request->getPost('securityMoney');
        $fields['bank'] = $this->request->getPost('bank');
        $fields['duration'] = $this->request->getPost('duration');
        $fields['time'] = $this->request->getPost('time');
        $fields['start_date'] = $this->request->getPost('startDate');
        $fields['end_date'] = $this->request->getPost('endDate');
        $fields['status'] = $this->request->getPost('status');


        $this->validation->setRules([
            'project_name' => ['label' => 'Project name', 'rules' => 'permit_empty|max_length[250]'],
            'project_location' => ['label' => 'Project location', 'rules' => 'required|numeric|max_length[11]'],
            'tender_id' => ['label' => 'Tender id', 'rules' => 'required|max_length[8]'],
            'bid_amount' => ['label' => 'Bid amount', 'rules' => 'required|numeric|max_length[12]'],
            'security_money' => ['label' => 'Security money', 'rules' => 'required'],
            'bank' => ['label' => 'Bank', 'rules' => 'required|max_length[50]'],
            'duration' => ['label' => 'Duration', 'rules' => 'required|numeric|max_length[11]'],
            'time' => ['label' => 'Time', 'rules' => 'required|max_length[5]'],
            'start_date' => ['label' => 'Start date', 'rules' => 'required|valid_date'],
            'end_date' => ['label' => 'End date', 'rules' => 'required|valid_date'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->projectsModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->projectsModel->where('id', $id)->delete()) {
								
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