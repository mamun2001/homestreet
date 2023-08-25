<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class SubcontractorController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();        
		//$crud->setTheme('datatables');
	    $crud->setTable('subcontactors');
        $crud->setSubject('Subcontactor');
               
        // $crud->unsetDelete();
        // $crud->unsetEdit();
        // $crud->setRead();
	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    private function _exampleOutput($output = null) {
        return view('output', (array)$output);
    }
}
