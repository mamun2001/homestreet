<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SubcontractorsModel;

class Subcontractors extends BaseController
{
	protected $subcontractorsModel;
	protected $validation;

	public function __construct()
	{
		$this->subcontractorsModel = new SubcontractorsModel();
		$this->validation = \Config\Services::validation();

	}

	public function index()
	{
		$data = [
			'controller' => 'subcontractors',
			'title' => 'Subcontractors'
		];

		return view('subcontractors', $data);
	}

	public function getAll()
	{
		$response = array();

		$data['data'] = array();

		$result = $this->subcontractorsModel->select('id, name, mobile, company_person, address')->findAll();

		foreach ($result as $key => $value) {

			$ops = '<div class="btn-group">';
			$ops .= '	<a class="btn btn-sm btn-warning" href="' . base_url("upload/" . $value->id) . '" onclick="files(' . $value->id . ')"><i class="fa fa-file"></i></a>';

			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';

			$data['data'][$key] = array(
				$value->id,
				$value->name,
				$value->mobile,
				$value->company_person,
				$value->address,

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

			$data = $this->subcontractorsModel->where('id', $id)->first();

			return $this->response->setJSON($data);

		} else {

			throw new \CodeIgniter\Exceptions\PageNotFoundException();

		}

	}

	public function add()
	{

		$response = array();

		$fields['id'] = $this->request->getPost('id');
		$fields['name'] = $this->request->getPost('name');
		$fields['mobile'] = $this->request->getPost('mobile');
		$fields['company_person'] = $this->request->getPost('companyPerson');
		$fields['address'] = $this->request->getPost('address');


		$this->validation->setRules([
			'name' => ['label' => 'Name', 'rules' => 'required|max_length[250]'],
			'mobile' => ['label' => 'Mobile', 'rules' => 'required|max_length[15]'],
			'company_person' => ['label' => 'Company person', 'rules' => 'required|max_length[250]'],
			'address' => ['label' => 'Address', 'rules' => 'required|max_length[500]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->listErrors();

		} else {

			if ($this->subcontractorsModel->insert($fields)) {

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
		$fields['name'] = $this->request->getPost('name');
		$fields['mobile'] = $this->request->getPost('mobile');
		$fields['company_person'] = $this->request->getPost('companyPerson');
		$fields['address'] = $this->request->getPost('address');


		$this->validation->setRules([
			'name' => ['label' => 'Name', 'rules' => 'required|max_length[250]'],
			'mobile' => ['label' => 'Mobile', 'rules' => 'required|max_length[15]'],
			'company_person' => ['label' => 'Company person', 'rules' => 'required|max_length[250]'],
			'address' => ['label' => 'Address', 'rules' => 'required|max_length[500]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->listErrors();

		} else {

			if ($this->subcontractorsModel->update($fields['id'], $fields)) {

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

			if ($this->subcontractorsModel->where('id', $id)->delete()) {

				$response['success'] = true;
				$response['messages'] = 'Deletion succeeded';

			} else {

				$response['success'] = false;
				$response['messages'] = 'Deletion error!';

			}
		}

		return $this->response->setJSON($response);
	}

	public function files()
	{
		$response = array();

		$id = $this->request->getPost('id');

		if (!$this->validation->check($id, 'required|numeric')) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException();

		} else {

			if ($this->subcontractorsModel->where('id', $id)->delete()) {

				$response['success'] = true;
				$response['messages'] = 'Deletion succeeded';

			} else {

				$response['success'] = false;
				$response['messages'] = 'Deletion error!';

			}
		}

		//return $this->response->setJSON($response);		
		return $this->routeto('upload');
	}

}