<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class ProjectsBillController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        // $crud->setTheme('datatables');
        $crud->setRelation('project_id','projects','{project_name}');
	    $crud->setTable('project_bill');
        $crud->setSubject('Project Bill');
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
