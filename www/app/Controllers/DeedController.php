<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class DeedController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        // $crud->setTheme('datatables');        
	    $crud->setTable('deed');
        $crud->setSubject('Contract Deed');
        $crud->displayAs('subcontractor_id','Subcontractor');
        $crud->setRelation('subcontractor_id','subcontact','{name} - {address}');
        $crud->setRelation('project_id','projects','{project_name}');
                
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
