<?php

namespace App\Controllers;

use App\Models\RequisitionModel;
use App\Models\SummaryentryModel;

class Home extends BaseController
{
    protected $requisitionModel;
    protected $summaryentryModel;
    protected $validation;

    public function __construct()
    {
        $this->requisitionModel = new RequisitionModel();
        $this->summaryentryModel = new SummaryentryModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        $userType = session()->get('user_type');
        if ($userType == 'Administrator') {
            $data['pending'] = array();
            $dat = $this->requisitionModel->where('status', 'Pending')->findAll();
            $data['pending'] = count($dat);

            $date = date_create(date("Y-m-d"));
            date_sub($date, date_interval_create_from_date_string("7 days"));
            $dt = date_format($date, "Y-m-d");
            $sum = $this->summaryentryModel->where('date(date_time)>=', $dt)->findAll();
            $data['vouchers'] = count($sum);

            return view('dashboard/admin', $data);
        } else {
            $data['pending'] = array();
            $dat = $this->requisitionModel->where('status', 'Approved')->findAll();
            $data['approved'] = count($dat);

            $userId = session()->get('user_id');
            $date = date_create(date("Y-m-d"));
            date_sub($date, date_interval_create_from_date_string("7 days"));
            $dt = date_format($date, "Y-m-d");
            $sum = $this->summaryentryModel->where('date(date_time)>=', $dt)->where('user_id', $userId)->findAll();
            $data['vouchers'] = count($sum);

            return view('dashboard/user', $data);
        }
    }
}
