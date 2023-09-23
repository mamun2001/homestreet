<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class DistrictsController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        // $crud->setTheme('datatables');
        $crud->setRelation('division','divisions','{division}');
	    $crud->setTable('districts');
        $crud->setSubject('District');
        $crud->unsetDelete();
        $crud->unsetEdit();
        $crud->setRead();
	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

    private function _exampleOutput($output = null) {        
        return view('output', (array)$output);
    }


}
