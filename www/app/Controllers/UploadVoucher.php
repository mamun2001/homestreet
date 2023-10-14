<?php 
namespace App\Controllers;
use App\Models\SummaryentryModel;
use App\Models\UserprojectsModel;
use App\Models\VouchersModel;

class UploadVoucher extends BaseController
{
	public function index($id=0)
	{
		// $data['data'] = array();		
		// $subcontractorsModel = new SubcontractorsModel();
		// $subcontractorfilesModel = new subcontractorfilesModel();				
		// $data['data'] = $subcontractorsModel->where('id' ,$id)->first();
		// $data['files'] = $subcontractorfilesModel->where('id' ,$id)->first();
		// return view('upload_form', $data);
		return view('summary_entry');
	}

	public function doupload()
	{
        $filesUploaded = 0;
		//$subcontractorid = $this->request->getPost('id');
		$userProjectsModel = new userProjectsModel();
		$data = $userProjectsModel->where('userid', session()->get('user_id'))->first();
		$amount = $this->request->getPost('amount');
		
		if($files = $this->request->getFiles())
		{
			$data = [
				'project_id' =>  $data['projectid'],
				'user_id' => session()->get('user_id'),
				'amount' => $amount,
				'date_time' => date("Y-m-d H:i:s"),
				'comment' => ""
			];

			 $fileUploadModel = new SummaryentryModel();
			 $fileUploadModel->save($data);
			 $summery_id = $fileUploadModel->insertID; 

			foreach($files['files'] as $file)
			{
				if ($file->isValid() && ! $file->hasMoved())
				{
					$newName = $file->getRandomName();
					$file->move('../public/uploads/voucher', $newName);    
					$data1 = [
						'summery_id' =>  $summery_id,						
						'file_path' => "uploads/voucher/".$newName					
					];

					$VouchersModel = new VouchersModel();
					$VouchersModel->save($data1);
                    $filesUploaded++;
				}
			}
            
			print $filesUploaded." Voucher(s) Uploaded";            
		}
		else {
			print "There is no file selected";            
		}
	}
	
	public function getOne()
	{
 		$response = array();
		$subcontractorfilesModel = new subcontractorfilesModel();
		$id = $this->request->getPost('id');
		
		if ($this->validation->check($id, 'required|numeric')) {			
			$data = $subcontractorfilesModel->where('subcontractorid' ,$id)->findAll();			
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
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
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