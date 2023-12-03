<?php
namespace App\Controllers;

use App\Models\ProjectsModel;
use App\Models\ProjectFilesModel;

class ProjectFilesUpload extends BaseController
{
	public function index($id = 0)
	{
		$data['data'] = array();
		// $projectsModel = new ProjectsModel();
		// $projectFilesModel = new ProjectFilesModel();

		$db = \Config\Database::connect();
		// $builder = $db->table('projects');
		// $builder->select('projects.*,districts.*');
		// $builder->join('districts', 'projects.project_location = districts.id', 'inner');
		// $builder->where('projects.id', $id);
		//$result = $builder->orderBy('projects.id', 'asc')->get()->getResult();

		$query = $db->query("select projects.id, projects.project_name,districts.district from projects INNER JOIN districts on districts.id=projects.project_location where projects.id=" . $id);
		$data['data'] = $query->getResultArray();

		// foreach ($results as $key => $value) {

		// 	$data['data'][$key] = array(
		// 		$value->id,
		// 		$value->project_name,
		// 		$value->district,
		// 	);
		// }
		print_r($data['data']);

		// $data['data'] = $projectsModel->where('id', $id)->first();
		// $data['files'] = $projectFilesModel->where('project_id', $id)->first();
		return view('project_files_upload_form', $data);
	}

	public function doupload()
	{
		$filesUploaded = 0;
		$subcontractorid = $this->request->getPost('id');
		$title = $this->request->getPost('title');

		if ($files = $this->request->getFiles()) {
			foreach ($files['files'] as $file) {
				if ($file->isValid() && !$file->hasMoved()) {
					$newName = $file->getRandomName();
					$file->move('../public/uploads', $newName);

					$data = [
						'subcontractorid' => $subcontractorid,
						'title' => $title,
						'filepath' => "uploads/" . $newName,
						'filetype' => $file->getClientExtension()
					];
					$fileUploadModel = new subcontractorfilesModel();
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
		$subcontractorfilesModel = new subcontractorfilesModel();
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
		$result = $this->subcontractorfilesModel->select('id, subcontractorid, title, filepath, filetype')->findAll();

		foreach ($result as $key => $value) {
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
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
}