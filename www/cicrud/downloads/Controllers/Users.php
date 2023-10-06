<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UsersModel;

class Users extends BaseController
{
	
    protected $usersModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->usersModel = new UsersModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'users',
                'title'     		=> 'Users'				
			];
		
		return view('users', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->usersModel->select('id, full_name, email, login, password, user_type, active')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->full_name,
				$value->email,
				$value->login,
				$value->password,
				$value->user_type,
				$value->active,

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
        $fields['full_name'] = $this->request->getPost('fullName');
        $fields['email'] = $this->request->getPost('email');
        $fields['login'] = $this->request->getPost('login');
        $fields['password'] = $this->request->getPost('password');
        $fields['user_type'] = $this->request->getPost('userType');
        $fields['active'] = $this->request->getPost('active');


        $this->validation->setRules([
            'full_name' => ['label' => 'Full name', 'rules' => 'required|max_length[500]'],
            'email' => ['label' => 'Email', 'rules' => 'required|max_length[250]'],
            'login' => ['label' => 'Login', 'rules' => 'required|max_length[100]'],
            'password' => ['label' => 'Password', 'rules' => 'required|max_length[250]'],
            'user_type' => ['label' => 'User type', 'rules' => 'required|max_length[50]'],
            'active' => ['label' => 'Active', 'rules' => 'required|max_length[20]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->usersModel->insert($fields)) {
												
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
        $fields['full_name'] = $this->request->getPost('fullName');
        $fields['email'] = $this->request->getPost('email');
        $fields['login'] = $this->request->getPost('login');
        $fields['password'] = $this->request->getPost('password');
        $fields['user_type'] = $this->request->getPost('userType');
        $fields['active'] = $this->request->getPost('active');


        $this->validation->setRules([
            'full_name' => ['label' => 'Full name', 'rules' => 'required|max_length[500]'],
            'email' => ['label' => 'Email', 'rules' => 'required|max_length[250]'],
            'login' => ['label' => 'Login', 'rules' => 'required|max_length[100]'],
            'password' => ['label' => 'Password', 'rules' => 'required|max_length[250]'],
            'user_type' => ['label' => 'User type', 'rules' => 'required|max_length[50]'],
            'active' => ['label' => 'Active', 'rules' => 'required|max_length[20]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->usersModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->usersModel->where('id', $id)->delete()) {
								
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