<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class UnitsController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        // $crud->setTheme('datatables');
        //$crud->setRelation('item_id','items','{item_name}');
	    $crud->setTable('units');
        $crud->setSubject('Units');
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
