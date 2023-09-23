<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class ItemsController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        // $crud->setTheme('datatables');        
	    $crud->setTable('items');
        $crud->setSubject('Items');
        $crud->setRelation('unit','units','{unit_name}');
        $crud->setRelation('size','sizes','{size}');
        $crud->setRelation('category','category','{category}');
        $crud->setRelation('brand','brands','{brand}');
        $crud->setRelation('model','models','{model}');
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
