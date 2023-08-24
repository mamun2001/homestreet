<?php namespace App\Controllers;

class Upload extends BaseController
{
	public function index()
	{
		return view('upload_form');
	}

	public function doupload()
	{
        $filesUploaded = 0;

		if($files = $this->request->getFiles())
		{	
			foreach($files['files'] as $file)
			{
				if ($file->isValid() && ! $file->hasMoved())
				{
					$newName = $file->getName();
					$file->move(WRITEPATH.'uploads', $newName);                    
                    $filesUploaded++;
				}
			}
            
			print $filesUploaded." Files are uploaded";
            
		}
		else {
			print "There is no files selected";            
		}
	}
}