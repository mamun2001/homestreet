<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\DeedModel;
 
class FileUpload extends BaseController
{
 
    protected $deedModel;

    public function index()
    {
        //$fileUploadModel = new DeedModel();
        //return view('file-upload', ['fileUploads' => $fileUploadModel->findAll()]);
        return view('file-upload');
    }
 
    public function multipleUpload() 
    {
        $filesUploaded = 0;
 
        if($this->request->getFileMultiple('fileuploads'))
        {
            $files = $this->request->getFileMultiple('fileuploads');
 
            foreach ($files as $file) {
 
                if ($file->isValid() && ! $file->hasMoved())
                {
                    $newName = $file->getRandomName();                    
                    $file->move(WRITEPATH.'uploads', $newName);
                    $data = [
                        'filename' => $file->getClientName(),
                        'filepath' => 'uploads/' . $newName,
                        'type' => $file->getClientExtension()
                    ];
                    // $fileUploadModel = new FileUploadModel();
                    // $fileUploadModel->save($data);
                    $filesUploaded++;
                }
                 
            }
 
        }
 
        if($filesUploaded <= 0) {
            return redirect()->back()->with('error', 'Choose files to upload.');
        }
 
        return redirect()->back()->with('success', $filesUploaded . ' File/s uploaded successfully.');
 
    }
}