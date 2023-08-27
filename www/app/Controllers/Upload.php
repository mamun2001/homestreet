<?php 
namespace App\Controllers;
use App\Models\SubcontractorsModel;
use App\Models\SubcontractorfilesModel;

class Upload extends BaseController
{
	public function index($id=0)
	{
		$data['data'] = array();		
		$subcontractorsModel = new SubcontractorsModel();
		$subcontractorfilesModel = new subcontractorfilesModel();				
		$data['data'] = $subcontractorsModel->where('id' ,$id)->first();
		$data['files'] = $subcontractorfilesModel->where('id' ,$id)->first();
		return view('upload_form', $data);
	}

	public function doupload()
	{
        $filesUploaded = 0;
		$subcontractorid = $this->request->getPost('id');
		$title = $this->request->getPost('title');
		
		if($files = $this->request->getFiles())
		{	
			foreach($files['files'] as $file)
			{
				if ($file->isValid() && ! $file->hasMoved())
				{
					$newName = $file->getRandomName();
					$file->move('../public/uploads', $newName);    
					
					$data = [
						'subcontractorid' => $subcontractorid,
                        'title' => $title,
                        'filepath' => "uploads/".$newName,
                        'filetype' => $file->getClientExtension()
                    ];
                     $fileUploadModel = new subcontractorfilesModel();
                     $fileUploadModel->save($data);
					
                    $filesUploaded++;
				}
			}
            
			print $filesUploaded." File(s) Uploaded";            
		}
		else {
			print "There is no files selected";            
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