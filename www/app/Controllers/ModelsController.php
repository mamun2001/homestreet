<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class ModelsController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        // $crud->setTheme('datatables');
	    $crud->setTable('models');
        $crud->setSubject('Models');
        $crud->displayAs('item_id','Item');
        $crud->setRelation('item_id','items','{item_name}');
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
