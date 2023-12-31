<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    public function index()
    {
        //$session = session();
        $userType = session()->get('user_type');
        if ($userType == 'Administrator') {
            return view('dashboard/admin');
        } else {
            return view('dashboard/home');
        }

    }
}
