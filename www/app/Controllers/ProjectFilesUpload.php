<?php
namespace App\Controllers;

use App\Models\ProjectsModel;
use App\Models\ProjectFilesModel;



class ProjectFilesUpload extends BaseController
{
	protected $projectfilesModel;
	protected $validation;

	public function __construct()
	{
		$this->projectfilesModel = new ProjectFilesModel();
		$this->validation = \Config\Services::validation();
	}

	public function index($id = 0)
	{
		$data['data'] = array();

		$db = \Config\Database::connect();
		// $builder = $db->table('projects');
		// $builder->select('projects.*,districts.*');
		// $builder->join('districts', 'projects.project_location = districts.id', 'inner');
		// $builder->where('projects.id', $id);
		//$result = $builder->orderBy('projects.id', 'asc')->get()->getResult();

		$query = $db->query("select projects.id, projects.project_name,districts.district from projects INNER JOIN districts on districts.id=projects.project_location where projects.id=" . $id);
		$data['data'] = $query->getResult();

		// print_r($data['data']);

		return view('project_files_upload_form', $data);
	}

	public function doupload()
	{
		$filesUploaded = 0;
		$projectid = $this->request->getPost('id');
		$title = $this->request->getPost('title');

		if ($files = $this->request->getFiles()) {
			foreach ($files['files'] as $file) {
				if ($file->isValid() && !$file->hasMoved()) {
					$newName = $file->getRandomName();
					$file->move('../public/uploads/projects/', $projectid . "_" . $newName);

					$data = [
						'project_id' => $projectid,
						'title' => $title,
						'filepath' => "uploads/projects/" . $projectid . "_" . $newName,
						'comment' => $file->getClientExtension()
					];
					$fileUploadModel = new ProjectFilesModel();
					$fileUploadModel->save($data);

					$filesUploaded++;
				}
			}

			print $filesUploaded . " File(s) Uploaded";
		} else {
			print "There is no files selected";
		}
	}

	public function getOne()
	{
		$response = array();
		$subcontractorfilesModel = new ProjectFilesModel();
		$id = $this->request->getPost('id');

		if ($this->validation->check($id, 'required|numeric')) {
			$data = $subcontractorfilesModel->where('subcontractorid', $id)->findAll();
			return $this->response->setJSON($data);
		} else {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}
	}

	public function getAll()
	{
		$response = array();
		$data['data'] = array();
		$id = $this->request->getPost('id');
		$result = $this->projectfilesModel->where('project_id', $id)->findAll();

		foreach ($result as $key => $value) {
			$ops = '<div class="btn-group">';
			$ops .= '	<a class="btn btn-sm btn-warning" target="_blank" href="' . base_url($value->filepath) . '"><i class="fa fa-eye"></i></a>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';

			$data['data'][$key] = array(
				$value->title,
				$value->filepath,

				$ops,
			);
		}

		return $this->response->setJSON($data);
	}
}