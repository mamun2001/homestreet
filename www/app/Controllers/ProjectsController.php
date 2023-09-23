<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class ProjectsController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        // $crud->setTheme('datatables');        
	    $crud->setTable('projects');
        $crud->setSubject('Project');
        $crud->setRelation('project_location','districts','{district}');
        // $crud->setRelationNtoN('project_location','districts','divisions','id');
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
