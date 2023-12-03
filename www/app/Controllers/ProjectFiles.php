<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProjectFilesModel;
use App\Models\ProjectsModel;

class ProjectFiles extends BaseController
{

	protected $projectFilesModel;
	protected $projectsModel;
	protected $validation;

	public function __construct()
	{
		$this->projectFilesModel = new ProjectFilesModel();
		$this->projectsModel = new ProjectsModel();
		$this->validation = \Config\Services::validation();

	}

	public function index()
	{

		$data = [
			'controller' => 'projectFiles',
			'title' => 'Project Files'
		];

		return view('projectFiles', $data);

	}

	public function getAll()
	{
		$response = array();

		$data['data'] = array();

		//$result = $this->projectFilesModel->select('id, project_id, title, filepath, comment')->findAll();
		//$result = $this->projectFilesModel->select('project_id, project_name, filepath, comment')->findAll();

		$db = \Config\Database::connect();
		// $builder = $db->table('projects');
		// $builder->select('projects.*,districts.*');
		// $builder->join('districts', 'projects.project_location = districts.id', 'inner');
		// $result = $builder->orderBy('projects.id', 'asc')->get()->getResult();

		$query = $db->query("select projects.id, projects.project_name,districts.district from projects INNER JOIN districts on districts.id=projects.project_location");
		$results = $query->getResult();

		foreach ($results as $key => $value) {

			$ops = '<div class="btn-group">';
			$ops .= '	<a class="btn btn-sm btn-warning" href="' . base_url("projectfilesupload/" . $value->id) . '" onclick="files(' . $value->id . ')"><i class="fa fa-file"></i></a>';
			// $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			// $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';

			$data['data'][$key] = array(
				$value->id,
				$value->project_name,
				$value->district,

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

			$data = $this->sourcesModel->where('id', $id)->first();

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
		$fields['title'] = $this->request->getPost('title');
		$fields['filepath'] = $this->request->getPost('filepath');
		$fields['comment'] = $this->request->getPost('comment');


		$this->validation->setRules([
			'project_id' => ['label' => 'Project', 'rules' => 'required|numeric|max_length[11]'],
			'title' => ['label' => 'Title', 'rules' => 'required|max_length[250]'],
			'filepath' => ['label' => 'Filepath', 'rules' => 'required|max_length[500]'],
			'comment' => ['label' => 'Comment', 'rules' => 'required|max_length[500]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->listErrors();

		} else {

			if ($this->projectFilesModel->insert($fields)) {

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
		$fields['title'] = $this->request->getPost('title');
		$fields['filepath'] = $this->request->getPost('filepath');
		$fields['comment'] = $this->request->getPost('comment');


		$this->validation->setRules([
			'project_id' => ['label' => 'Project', 'rules' => 'required|numeric|max_length[11]'],
			'title' => ['label' => 'Title', 'rules' => 'required|max_length[250]'],
			'filepath' => ['label' => 'Filepath', 'rules' => 'required|max_length[500]'],
			'comment' => ['label' => 'Comment', 'rules' => 'required|max_length[500]'],

		]);

		if ($this->validation->run($fields) == FALSE) {

			$response['success'] = false;
			$response['messages'] = $this->validation->listErrors();

		} else {

			if ($this->projectFilesModel->update($fields['id'], $fields)) {

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

			if ($this->projectFilesModel->where('id', $id)->delete()) {

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