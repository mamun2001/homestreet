<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\RequisitionModel;
use App\Models\UserprojectsModel;

class Requisition extends BaseController
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
            'controller' => 'requisition',
            'title' => 'Requisition'
        ];

        return view('requisition', $data);
    }

    public function getAll()
    {
        $response = array();
        $data['data'] = array();
        $result = $this->requisitionModel->select('id, project_id, requested_amount, submit_date_time, recieved_amount, recieve_date_time, status, comment')->orderBy('id', 'DESC')->findAll();
        //$builder = $this->requisitionModel->builder();

        foreach ($result as $key => $value) {
            $ops = '<div class="btn-group">';
            $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
            $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
            $ops .= '</div>';

            $data['data'][$key] = array(
                $value->id,
                $value->project_id,                
                $value->requested_amount,
                $value->submit_date_time,
                $value->recieved_amount,
                $value->recieve_date_time,                
                $value->status,
                $value->comment,
                $ops,
            );
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
        // $fields['comment'] = $this->request->getPost('comment');

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
        $fields['project_id'] = $this->request->getPost('projectId');
        $fields['user_id'] = $this->request->getPost('userId');
        $fields['requested_amount'] = $this->request->getPost('requestedAmount');
        $fields['submit_date_time'] = $this->request->getPost('submitDateTime');
        $fields['recieved_amount'] = $this->request->getPost('recievedAmount');
        $fields['recieve_date_time'] = $this->request->getPost('recieveDateTime');
        $fields['recieved_by'] = $this->request->getPost('recievedBy');
        $fields['status'] = $this->request->getPost('status');
        $fields['comment'] = $this->request->getPost('comment');


        $this->validation->setRules([
            'project_id' => ['label' => 'Project id', 'rules' => 'required|numeric|max_length[11]'],
            'user_id' => ['label' => 'User id', 'rules' => 'required|numeric|max_length[11]'],
            'requested_amount' => ['label' => 'Requested amount', 'rules' => 'required|numeric|max_length[11]'],
            'submit_date_time' => ['label' => 'Submit date time', 'rules' => 'required|valid_date'],
            'recieved_amount' => ['label' => 'Recieved amount', 'rules' => 'required|numeric|max_length[11]'],
            'recieve_date_time' => ['label' => 'Recieve date time', 'rules' => 'required|valid_date'],
            'recieved_by' => ['label' => 'Recieved by', 'rules' => 'required|numeric|max_length[11]'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[150]'],
            'comment' => ['label' => 'Comment', 'rules' => 'required|max_length[500]'],

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