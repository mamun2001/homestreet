<?php
namespace App\Controllers;

use App\Libraries\GroceryCrud;

class UserController extends BaseController
{
    public function index()
    {
        $crud = new GroceryCrud();
        // $crud->setTheme('datatables');
        $crud->setRelation('user_type', 'user_type', '{type}');
        $crud->setRelation('active', 'user_status', '{status}');
        $crud->fieldType('password', 'password');
        $crud->setRule('password', 'Password', 'md5');
        $crud->requiredFields(['full_name', 'login', 'password']);

        $crud->setTable('tbl_user');
        $crud->setSubject('Users');

        $crud->callbackBeforeInsert(function ($stateParameters) {
            $stateParameters->data['password'] = md5($stateParameters->data['password']);
            return $stateParameters;
        });

        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $stateParameters->data['password'] = md5($stateParameters->data['password']);
            return $stateParameters;
        });

        // $crud->unsetDelete();
        // $crud->unsetEdit();
        $crud->setRead();
        $output = $crud->render();

        return $this->_exampleOutput($output);
    }

    private function _exampleOutput($output = null)
    {
        return view('output', (array) $output);
    }

}