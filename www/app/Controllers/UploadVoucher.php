<?php
namespace App\Controllers;

use App\Models\SummaryentryModel;
use App\Models\UserprojectsModel;
use App\Models\VouchersModel;
use App\Models\TmpexpensedetailModel;
use App\Models\DailyExpenseDetailModel;

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

		$builder = $db->table('tmp_expense_detail');
		$builder->truncate();

		return view('tmpexpensedetail', $data);
	}

	public function doupload()
	{
		$response = array();
		$db = \Config\Database::connect();
		$filesUploaded = 0;
		$tmpexp = new TmpexpensedetailModel();
		$result = $tmpexp->asArray()->select('sum(amount) as amount')->first();

		if ($files = $this->request->getFiles()) {
			$data = [
				'project_id' => session()->get('project_id'),
				'user_id' => session()->get('user_id'),
				'amount' => $result['amount'],
				'date_time' => date("Y-m-d H:i:s"),
				'comment' => ""
			];

			$Summaryentry = new SummaryentryModel();
			$Summaryentry->save($data);
			$summery_id = $Summaryentry->insertID;

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

			//insert into daily_expense_detail table from tmp_expense_detail
			$result = $tmpexp->select('id, head_id, item_id, category_id, brand_id, model_id, size_id, unit_id, rate, qty, amount')->findAll();

			foreach ($result as $key => $value) {
				$fields['summary_id'] = $summery_id;
				$fields['head_id'] = $value->head_id;
				$fields['item_id'] = $value->item_id;
				$fields['category_id'] = $value->category_id;
				$fields['brand_id'] = $value->brand_id;
				$fields['model_id'] = $value->model_id;
				$fields['size_id'] = $value->size_id;
				$fields['unit_id'] = $value->unit_id;
				$fields['rate'] = $value->rate;
				$fields['qty'] = $value->qty;
				$fields['amount'] = $value->amount;
				$fields['project_id'] = session()->get('project_id');
				$fields['user_id'] = session()->get('user_id');
				$fields['comment'] = '';

				$dailyexpensedetail = new DailyExpenseDetailModel();
				$dailyexpensedetail->save($fields);
			}

			//truncate tmp_expense_detail
			$builder = $db->table('tmp_expense_detail');
			$builder->truncate();

			// $response['success'] = true;
			// $response['messages'] = $filesUploaded . " Voucher(s) Uploaded";

			print $filesUploaded . " Voucher(s) Uploaded";

		} else {
			// $response['success'] = false;
			// $response['messages'] = "There is no file selected";

			print "There is no file selected";
		}

		// return $this->response->setJSON($response);
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

	public function voucherList()
	{
		$data = [
			'controller' => 'UploadVoucher',
			'title' => 'UploadVoucher'
		];

		return view('summary_entry', $data);
	}

	public function voucherListAdmin()
	{
		$data = [
			'controller' => 'UploadVoucher',
			'title' => 'UploadVoucher'
		];

		return view('vouchers-admin', $data);
	}

	public function showVouchers($id = 0)
	{
		$data['data'] = array();

		$db = \Config\Database::connect();
		$query = $db->query("SELECT d.id,p.project_name,u.full_name,d.amount,d.date_time,d.comment FROM daily_expense_summary d INNER JOIN projects p ON d.project_id=p.id INNER JOIN tbl_user u ON d.user_id=u.id WHERE d.id=" . $id);
		$data['data'] = $query->getResult();

		return view('showvoucher', $data);
	}

	public function showVouchersAdmin($id = 0)
	{
		$data['data'] = array();

		$db = \Config\Database::connect();
		$query = $db->query("SELECT d.id,p.project_name,u.full_name,d.amount,d.date_time,d.comment FROM daily_expense_summary d INNER JOIN projects p ON d.project_id=p.id INNER JOIN tbl_user u ON d.user_id=u.id WHERE d.id=" . $id);
		$data['data'] = $query->getResult();

		return view('showvoucher-admin', $data);
	}

	public function getAll()
	{
		$response = array();
		$data['data'] = array();
		$id = $this->request->getPost('id');
		$VouchersModel = new VouchersModel();
		$result = $VouchersModel->where('summery_id', $id)->findAll();

		foreach ($result as $key => $value) {
			$ops = '<div class="btn-group">';
			$ops .= '	<a class="btn btn-sm btn-warning" target="_blank" href="' . base_url($value->file_path) . '"><i class="fa fa-eye"></i></a>';
			// $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';

			$parts = explode('/', $value->file_path, 3);

			$data['data'][$key] = array(
				$value->id,
				$parts[2],

				$ops,
			);
		}

		return $this->response->setJSON($data);
	}

	public function getAllforUser()
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
			$ops .= '	<a class="btn btn-sm btn-warning" href="' . base_url("showVouchers/" . $value->id) . '" onclick="files(' . $value->id . ')"><i class="fa fa-file"></i></a>';
			// $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';

			$data['data'][$key] = array(
				$value->id,
				$value->project_name,
				// $value->full_name,
				$value->amount,
				$value->date_time,
				$value->comment,

				$ops,
			);
		}

		return $this->response->setJSON($data);
	}

	public function getAllforAdmin()
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
			$ops .= '	<a class="btn btn-sm btn-warning" href="' . base_url("showVouchersAdmin/" . $value->id) . '" onclick="files(' . $value->id . ')"><i class="fa fa-file"></i></a>';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
			// $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
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