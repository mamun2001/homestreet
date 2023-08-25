<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class ProjectSubcontractsController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();        
		//$crud->setTheme('datatables');
	    $crud->setTable('project_subcontracts');
        $crud->setSubject('Project Subcontracts');
		$crud->setRelation('projectid','projects','{project_name}');
		$crud->setRelation('subcontractorid','subcontactors','{name}-{company_person}');
		$crud->setRelation('time_unit','time','{time}');
		
		$crud->displayAs('projectid','Project');
		$crud->displayAs('subcontractorid','Subcontractor');
               
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
