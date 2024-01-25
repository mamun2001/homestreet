<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use \Hermawan\DataTables\DataTable;

class UsersController extends Controller
{

    // public function __construct()
    // {
    //     $this->db = \Config\Database::connect();
    // }

    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/home', $data);
    }

    public function profile()
    {
        $data['pageTitle'] = 'Profile';
        return view('dashboard/profile', $data);
    }

    public function list()
    {
        helper('url');
        return view('list');
    }

    public function ajaxUser()
    {
        $db = db_connect();
        $builder = $db->table('users')->select('name, email, id');

        return DataTable::of($builder)
            ->addNumbering() //it will return data output with numbering on first column
            ->toJson();
    }
}
