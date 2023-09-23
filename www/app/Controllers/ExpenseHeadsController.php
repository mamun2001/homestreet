<?php namespace App\Controllers;

use App\Libraries\GroceryCrud;

class ExpenseHeadsController extends BaseController
{
	public function index()
	{        
	    $crud = new GroceryCrud();
        
	    $crud->setTable('expense_heads');
        $crud->setSubject('Expense Heads');
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
