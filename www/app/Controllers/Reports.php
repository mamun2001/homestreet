<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\RequisitionModel;
use App\Models\UserprojectsModel;

class Reports extends BaseController
{
    protected $requisitionModel;
    protected $userProjectsModel;
    protected $validation;

    public function __construct()
    {
        $this->requisitionModel = new RequisitionModel();
        $this->userProjectsModel = new UserprojectsModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'controller' => 'reports',
            'title' => 'Reports'
        ];

        // $db      = \Config\Database::connect();        
        // $builder = $db->table('requisition');        
        // $builder->select('requisition.*,projects.*');
        // $builder->join('projects', 'projects.id = requisition.project_id','inner');
        // $result = $builder->get()->getResult();
        //print_r($db->getLastQuery());
        // print_r($result);

        return view('reports/requisition', $data);
    }

    public function RequisitionReport()
    {
        $response = array();
        $startDate = $this->request->getPost('startDate');
        $endDate = $this->request->getPost('endDate');

        $data['data'] = array();

        $db = \Config\Database::connect();

        $query = $db->query("(SELECT r.*,p.project_name FROM `requisition` r inner JOIN projects p on r.project_id=p.id WHERE cast(r.submit_date_time AS DATE)>='".$startDate."' AND cast(r.submit_date_time AS DATE)<='".$endDate."' order by r.id) UNION ALL
        (SELECT 'Total','','',SUM(r.requested_amount),'',SUM(r.recieved_amount),'','','','','' FROM `requisition` r inner JOIN projects p on r.project_id=p.id WHERE cast(r.submit_date_time AS DATE)>='".$startDate."' AND cast(r.submit_date_time AS DATE)<='".$endDate."')
        ");
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            // $ops = "";

            // if ($value->status == "Pending") {
            //     $ops = '<div class="btn-group">';
            //     $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
            //     $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
            //     $ops .= '</div>';
            // }

            if ($value->recieve_date_time == "0000-00-00 00:00:00") {

                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    "",
                    $value->status,
                    $value->comment,

                    // $ops,
                );

            } else {
                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    $value->recieve_date_time,
                    $value->status,
                    $value->comment,

                    // $ops,
                );
            }
        }

        return $this->response->setJSON($data);
    }
    public function admin()
    {
        $data = [
            'controller' => 'requisition',
            'title' => 'Requisition'
        ];

        return view('requisition-admin', $data);
    }

    public function getAllAdmin()
    {
        $response = array();
        $data['data'] = array();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT r.*,p.project_name FROM `requisition` r inner JOIN projects p on r.project_id=p.id order by r.id desc');
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $ops = "";

            if ($value->status == "Pending") {
                $ops = '<div class="btn-group">';
                $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
                $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
                $ops .= '</div>';
            }

            if ($value->recieve_date_time == "0000-00-00 00:00:00") {

                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    "",
                    $value->status,
                    $value->comment,

                    $ops,
                );

            } else {
                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    $value->recieve_date_time,
                    $value->status,
                    $value->comment,

                    $ops,
                );
            }
        }

        return $this->response->setJSON($data);
    }

    public function getAllApproved()
    {
        $response = array();
        $data['data'] = array();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT r.*,p.project_name FROM `requisition` r inner JOIN projects p on r.project_id=p.id where r.status="Approved" order by r.id desc');
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $ops = "";

            if ($value->recieve_date_time == "0000-00-00 00:00:00") {

                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    "",
                    $value->status,
                    $value->comment,

                    $ops,
                );

            } else {
                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    $value->recieve_date_time,
                    $value->status,
                    $value->comment,

                    $ops,
                );
            }
        }

        return $this->response->setJSON($data);
    }
    public function getAllApprovedUser()
    {
        $response = array();
        $data['data'] = array();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT r.*,p.project_name FROM `requisition` r inner JOIN projects p on r.project_id=p.id where r.status="Approved" order by r.id desc');
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $ops = "";

            if ($value->status == "Approved") {
                $ops = '<div class="btn-group">';
                $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="receive(' . $value->id . ')"><i></i>Receive</button>';
                $ops .= '</div>';
            }

            if ($value->recieve_date_time == "0000-00-00 00:00:00") {

                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    "",
                    $value->status,
                    $value->comment,

                    $ops,
                );

            } else {
                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    $value->recieve_date_time,
                    $value->status,
                    $value->comment,

                    $ops,
                );
            }
        }

        return $this->response->setJSON($data);
    }
    public function getAllPending()
    {
        $response = array();
        $data['data'] = array();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT r.*,p.project_name FROM `requisition` r inner JOIN projects p on r.project_id=p.id where r.status="Pending" order by r.id desc');
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $ops = "";

            if ($value->status == "Pending") {
                $ops = '<div class="btn-group">';
                $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
                $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
                $ops .= '</div>';
            }

            if ($value->recieve_date_time == "0000-00-00 00:00:00") {

                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    "",
                    $value->status,
                    $value->comment,

                    $ops,
                );

            } else {
                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    $value->recieve_date_time,
                    $value->status,
                    $value->comment,

                    $ops,
                );
            }
        }

        return $this->response->setJSON($data);
    }
    public function getAllPendingUser()
    {
        $response = array();
        $data['data'] = array();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT r.*,p.project_name FROM `requisition` r inner JOIN projects p on r.project_id=p.id where r.status="Pending" order by r.id desc');
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $ops = "";

            if ($value->recieve_date_time == "0000-00-00 00:00:00") {

                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    "",
                    $value->status,
                    $value->comment,

                    $ops,
                );

            } else {
                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    $value->recieve_date_time,
                    $value->status,
                    $value->comment,

                    $ops,
                );
            }
        }

        return $this->response->setJSON($data);
    }

    public function getAll()
    {
        $response = array();
        $data['data'] = array();

        $db = \Config\Database::connect();
        $query = $db->query('SELECT r.*,p.project_name FROM `requisition` r inner JOIN projects p on r.project_id=p.id order by r.id desc');
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $ops = "";

            if ($value->status == "Approved") {
                $ops = '<div class="btn-group">';
                $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="receive(' . $value->id . ')"><i></i>Receive</button>';
                // $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
                $ops .= '</div>';
            }

            if ($value->recieve_date_time == "0000-00-00 00:00:00") {

                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    "",
                    $value->status,
                    $value->comment,

                    $ops,
                );

            } else {
                $data['data'][$key] = array(
                    $value->id,
                    $value->project_name,
                    $value->requested_amount,
                    $value->submit_date_time,
                    $value->recieved_amount,
                    $value->recieve_date_time,
                    $value->status,
                    $value->comment,

                    $ops,
                );
            }
        }

        return $this->response->setJSON($data);
    }

    public function getOne()
    {
        $response = array();
        $id = $this->request->getPost('id');

        if ($this->validation->check($id, 'required|numeric')) {
            $data = $this->requisitionModel->where('id', $id)->first();
            return $this->response->setJSON($data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
    }

    public function receive()
    {
        $response = array();
        $fields['id'] = $this->request->getPost('id');
        $fields['recieve_date_time'] = date("Y-m-d H:i:s");
        $fields['recieved_by'] = session()->get('user_id');
        $fields['status'] = "Recieved";

        $this->validation->setRules([
            'recieve_date_time' => ['label' => 'Recieve date time', 'rules' => 'required|valid_date'],
            'recieved_by' => ['label' => 'Recieved by', 'rules' => 'required|numeric|max_length[11]'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[150]'],
        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();

        } else {

            if ($this->requisitionModel->update($fields['id'], $fields)) {

                $response['success'] = true;
                $response['messages'] = 'Successfully updated';

            } else {

                $response['success'] = false;
                $response['messages'] = 'Update error!';

            }
        }

        return $this->response->setJSON($response);

    }
    public function add()
    {
        $response = array();

        $data = $this->userProjectsModel->where('userid', session()->get('user_id'))->first();

        //$fields['id'] = $this->request->getPost('id');
        $fields['project_id'] = $data['projectid'];
        $fields['user_id'] = session()->get('user_id');
        $fields['requested_amount'] = $this->request->getPost('requestedAmount');
        $fields['submit_date_time'] = date("Y-m-d H:i:s");
        // $fields['recieved_amount'] = $this->request->getPost('recievedAmount');
        // $fields['recieve_date_time'] = $this->request->getPost('recieveDateTime');
        // $fields['recieved_by'] = $this->request->getPost('recievedBy');
        $fields['status'] = "Pending";
        $fields['comment'] = $this->request->getPost('comment');

        $this->validation->setRules([
            'requested_amount' => ['label' => 'Requested amount', 'rules' => 'required|numeric|max_length[11]'],
        ]);

        if ($this->validation->run($fields) == FALSE) {
            // $response['success'] = false;
            // $response['messages'] = $this->validation->listErrors();
            print $this->validation->listErrors();
        } else {
            if ($this->requisitionModel->insert($fields)) {
                // $response['success'] = true;
                // $response['messages'] = 'Data has been inserted successfully';
                print "Data has been inserted successfully";
            } else {
                // $response['success'] = false;
                // $response['messages'] = 'Insertion error!';
                print "Insertion error!";
            }
        }

        // return $this->response->setJSON($response);
    }

    public function edit()
    {

        $response = array();

        $fields['id'] = $this->request->getPost('id');
        // $fields['project_id'] = $this->request->getPost('projectId');
        // $fields['user_id'] = $this->request->getPost('userId');
        // $fields['requested_amount'] = $this->request->getPost('requestedAmount');
        // $fields['submit_date_time'] = $this->request->getPost('submitDateTime');
        $fields['recieved_amount'] = $this->request->getPost('recievedAmount');
        // $fields['recieve_date_time'] = date("Y-m-d H:i:s");
        // $fields['recieved_by'] = $this->request->getPost('recievedBy');
        $fields['status'] = "Approved";
        // $fields['comment'] = $this->request->getPost('comment');


        $this->validation->setRules([
            // 'project_id' => ['label' => 'Project id', 'rules' => 'required|numeric|max_length[11]'],
            // 'user_id' => ['label' => 'User id', 'rules' => 'required|numeric|max_length[11]'],
            // 'requested_amount' => ['label' => 'Requested amount', 'rules' => 'required|numeric|max_length[11]'],
            // 'submit_date_time' => ['label' => 'Submit date time', 'rules' => 'required|valid_date'],
            'recieved_amount' => ['label' => 'Recieved amount', 'rules' => 'required|numeric|max_length[11]'],
            // 'recieve_date_time' => ['label' => 'Recieve date time', 'rules' => 'required|valid_date'],
            // 'recieved_by' => ['label' => 'Recieved by', 'rules' => 'required|numeric|max_length[11]'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[150]'],
            // 'comment' => ['label' => 'Comment', 'rules' => 'required|max_length[500]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();

        } else {

            if ($this->requisitionModel->update($fields['id'], $fields)) {

                $response['success'] = true;
                $response['messages'] = 'Successfully updated';

            } else {

                $response['success'] = false;
                $response['messages'] = 'Update error!';

            }
        }

        return $this->response->setJSON($response);

    }

    public function remove()
    {
        $response = array();

        $id = $this->request->getPost('id');

        if (!$this->validation->check($id, 'required|numeric')) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException();

        } else {

            if ($this->requisitionModel->where('id', $id)->delete()) {

                $response['success'] = true;
                $response['messages'] = 'Deletion succeeded';

            } else {

                $response['success'] = false;
                $response['messages'] = 'Deletion error!';

            }
        }

        return $this->response->setJSON($response);
    }

}