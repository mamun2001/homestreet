<?php
namespace App\Controllers;

use App\Models\SummaryentryModel;
use App\Models\UserprojectsModel;
use App\Models\VouchersModel;
use App\Models\TmpexpensedetailModel;

class UploadVoucher extends BaseController
{
	public function index($id = 0)
	{
		$data = [
			'controller' => 'Tmpexpensedetail',
			'title' => 'UploadVoucher'
		];
		$db = \Config\Database::connect();
		// $builder = $db->table('daily_expense_summary d');
		// $builder->select('d.id,p.project_name,u.full_name,d.amount,d.date_time,d.comment');
		// $builder->join('projects p', 'p.id = d.project_id', 'inner');
		// $builder->join('tbl_user u', 'u.id = d.user_id', 'inner');
		// $result = $builder->orderBy('d.id', 'desc')->get()->getResult();
		// print_r($result);

		// return view('summary_entry');

		//Heads
		$builder = $db->table('expense_heads');
		$result = $builder->get()->getResult();
		foreach ($result as $key => $value) {
			$data['heads'][$value->id] = $value->head;
		}

		//Items
		$builder = $db->table('items');
		$result = $builder->get()->getResult();
		foreach ($result as $key => $value) {
			$data['items'][$value->id] = $value->item_name;
		}

		//Category
		$builder = $db->table('category');
		$result = $builder->get()->getResult();
		foreach ($result as $key => $value) {
			$data['category'][$value->id] = $value->category;
		}

		//Brand
		$builder = $db->table('brands');
		$result = $builder->get()->getResult();
		foreach ($result as $key => $value) {
			$data['brands'][$value->id] = $value->brand;
		}

		//Model
		$builder = $db->table('models');
		$result = $builder->get()->getResult();
		foreach ($result as $key => $value) {
			$data['models'][$value->id] = $value->model;
		}

		//Size
		$builder = $db->table('sizes');
		$result = $builder->get()->getResult();
		foreach ($result as $key => $value) {
			$data['sizes'][$value->id] = $value->size;
		}

		//Unit
		$builder = $db->table('units');
		$result = $builder->get()->getResult();
		foreach ($result as $key => $value) {
			$data['units'][$value->id] = $value->unit_name;
		}

		return view('tmpexpensedetail', $data);
	}

	public function doupload()
	{
		$filesUploaded = 0;
		$userProjectsModel = new userProjectsModel();
		$data = $userProjectsModel->where('userid', session()->get('user_id'))->first();
		$amount = $this->request->getPost('amount');

		if ($files = $this->request->getFiles()) {
			$data = [
				'project_id' => $data['projectid'],
				'user_id' => session()->get('user_id'),
				'amount' => $amount,
				'date_time' => date("Y-m-d H:i:s"),
				'comment' => ""
			];

			$fileUploadModel = new SummaryentryModel();
			$fileUploadModel->save($data);
			$summery_id = $fileUploadModel->insertID;

			foreach ($files['files'] as $file) {
				if ($file->isValid() && !$file->hasMoved()) {
					$newName = $file->getRandomName();
					$file->move('../public/uploads/voucher', $newName);
					$data1 = [
						'summery_id' => $summery_id,
						'file_path' => "uploads/voucher/" . $newName
					];

					$VouchersModel = new VouchersModel();
					$VouchersModel->save($data1);
					$filesUploaded++;
				}
			}
			$response['success'] = true;
			$response['messages'] = $filesUploaded . " Voucher(s) Uploaded";

			//print $filesUploaded . " Voucher(s) Uploaded";

		} else {
			$response['success'] = false;
			$response['messages'] = "There is no file selected";

			//print "There is no file selected";
		}

		return $this->response->setJSON($response);
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

		$db = \Config\Database::connect();
		$builder = $db->table('daily_expense_summary d');
		$builder->select('d.id,p.project_name,u.full_name,d.amount,d.date_time,d.comment');
		$builder->join('projects p', 'p.id = d.project_id', 'inner');
		$builder->join('tbl_user u', 'u.id = d.user_id', 'inner');
		$result = $builder->orderBy('d.id', 'desc')->get()->getResult();


		foreach ($result as $key => $value) {
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';

			$data['data'][$key] = array(
				$value->id,
				$value->project_name,
				$value->full_name,
				$value->amount,
				$value->date_time,
				$value->comment,

				$ops,
			);
		}

		return $this->response->setJSON($data);
	}
}