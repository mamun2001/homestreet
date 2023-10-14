<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SummaryentryModel;

class Summaryentry extends BaseController
{
	
    protected $summaryentryModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->summaryentryModel = new SummaryentryModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'summaryentry',
                'title'     		=> 'Summary Entry'				
			];
		
		return view('summaryentry', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->summaryentryModel->select('id, project_id, user_id, amount, date_time, comment')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->project_id,
				$value->user_id,
				$value->amount,
				$value->date_time,
				$value->comment,

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
        $fields['project_id'] = $this->request->getPost('projectId');
        $fields['user_id'] = $this->request->getPost('userId');
        $fields['amount'] = $this->request->getPost('amount');
        $fields['date_time'] = $this->request->getPost('dateTime');
        $fields['comment'] = $this->request->getPost('comment');


        $this->validation->setRules([
            'project_id' => ['label' => 'Project id', 'rules' => 'required|numeric|max_length[11]'],
            'user_id' => ['label' => 'User id', 'rules' => 'required|numeric|max_length[11]'],
            'amount' => ['label' => 'Amount', 'rules' => 'required|numeric|max_length[11]'],
            'date_time' => ['label' => 'Date time', 'rules' => 'required|valid_date'],
            'comment' => ['label' => 'Comment', 'rules' => 'required|max_length[500]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->summaryentryModel->insert($fields)) {
												
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
        $fields['project_id'] = $this->request->getPost('projectId');
        $fields['user_id'] = $this->request->getPost('userId');
        $fields['amount'] = $this->request->getPost('amount');
        $fields['date_time'] = $this->request->getPost('dateTime');
        $fields['comment'] = $this->request->getPost('comment');


        $this->validation->setRules([
            'project_id' => ['label' => 'Project id', 'rules' => 'required|numeric|max_length[11]'],
            'user_id' => ['label' => 'User id', 'rules' => 'required|numeric|max_length[11]'],
            'amount' => ['label' => 'Amount', 'rules' => 'required|numeric|max_length[11]'],
            'date_time' => ['label' => 'Date time', 'rules' => 'required|valid_date'],
            'comment' => ['label' => 'Comment', 'rules' => 'required|max_length[500]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->summaryentryModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->summaryentryModel->where('id', $id)->delete()) {
								
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