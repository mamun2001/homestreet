<?php
namespace App\Controllers;

use App\Libraries\GroceryCrud;

class UserProjectsController extends BaseController
{
    public function index()
    {
        $crud = new GroceryCrud();
        // $crud->setTheme('datatables');        
        $crud->setTable('user_projects');
        $crud->setRelation('userid', 'tbl_user', '{full_name}');
        $crud->setRelation('projectid', 'projects', '{project_name}');
        $crud->setSubject('User Projects');
        $crud->fieldtype('status', 'dropdown', array('active' => 'Active', 'inactive' => 'Inactive'));
        // $crud->unsetDelete();
        // $crud->unsetEdit();
        // $crud->setRead();
        $output = $crud->render();

        return $this->_exampleOutput($output);
    }

    private function _exampleOutput($output = null)
    {
        return view('output', (array) $output);
    }
}