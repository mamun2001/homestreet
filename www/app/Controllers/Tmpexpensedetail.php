<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TmpexpensedetailModel;

class Tmpexpensedetail extends BaseController
{

    protected $tmpexpensedetailModel;
    protected $validation;

    public function __construct()
    {
        $this->tmpexpensedetailModel = new TmpexpensedetailModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'controller' => 'tmpexpensedetail',
            'title' => 'TempExpenseDetail'
        ];

        return view('tmpexpensedetail', $data);
    }

    public function getAll()
    {
        $response = array();
        $data['data'] = array();
        //$result = $this->tmpexpensedetailModel->select('id, head_id, item_id, category_id, brand_id, model_id, size_id, unit_id, rate, qty, amount')->findAll();

        $db = \Config\Database::connect();
        $query = $db->query('SELECT t.id, h.head, i.item_name, c.category, b.brand, m.model, s.size, u.unit_name, rate, qty, amount FROM tmp_expense_detail t LEFT join expense_heads h on h.id=t.head_id LEFT JOIN items i on i.id=t.item_id LEFT JOIN category c on c.id=t.category_id LEFT JOIN brands b on b.id=t.brand_id LEFT JOIN models m on  m.id=t.model_id LEFT JOIN sizes s on s.id=t.size_id LEFT JOIN units u on u.id=t.unit_id
        ');
        $result = $query->getResult();

        foreach ($result as $key => $value) {

            $ops = '<div class="btn-group">';
            // $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
            $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
            $ops .= '</div>';

            $data['data'][$key] = array(
                $value->id,
                $value->head,
                $value->item_name,
                $value->category,
                $value->brand,
                $value->model,
                $value->size,
                $value->unit_name,
                $value->rate,
                $value->qty,
                $value->amount,

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
            $data = $this->tmpexpensedetailModel->where('id', $id)->first();
            return $this->response->setJSON($data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
    }

    public function add()
    {
        $response = array();

        // $fields['id'] = $this->request->getPost('id');
        $fields['head_id'] = $this->request->getPost('head_id');
        $fields['item_id'] = $this->request->getPost('item_id');
        $fields['category_id'] = $this->request->getPost('category_id');
        $fields['brand_id'] = $this->request->getPost('brand_id');
        $fields['model_id'] = $this->request->getPost('model_id');
        $fields['size_id'] = $this->request->getPost('size_id');
        $fields['unit_id'] = $this->request->getPost('unit_id');
        $fields['rate'] = $this->request->getPost('rate');
        $fields['qty'] = $this->request->getPost('qty');
        $fields['amount'] = $this->request->getPost('amount');

        $this->validation->setRules([
            'head_id' => ['label' => 'Head id', 'rules' => 'required|numeric|max_length[11]'],
            'item_id' => ['label' => 'Item id', 'rules' => 'required|numeric|max_length[11]'],
            'category_id' => ['label' => 'Category id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'brand_id' => ['label' => 'Brand id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'model_id' => ['label' => 'Model id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'size_id' => ['label' => 'Size id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'unit_id' => ['label' => 'Unit id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'rate' => ['label' => 'Rate', 'rules' => 'required|numeric|max_length[11]'],
            'qty' => ['label' => 'Qty', 'rules' => 'required|numeric|max_length[11]'],
            'amount' => ['label' => 'Amount', 'rules' => 'required|numeric|max_length[11]'],
        ]);

        if ($this->validation->run($fields) == FALSE) {
            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
        } else {
            if ($this->tmpexpensedetailModel->insert($fields)) {
                $response['success'] = true;
                $response['messages'] = 'Data has been inserted successfully';
            } else {
                $response['success'] = false;
                $response['messages'] = 'Insertion error!';
            }
        }

        $data['data'] = array();
        //$result = $this->tmpexpensedetailModel->select('id, head_id, item_id, category_id, brand_id, model_id, size_id, unit_id, rate, qty, amount')->findAll();

        $db = \Config\Database::connect();
        $query = $db->query('SELECT t.id, h.head, i.item_name, c.category, b.brand, m.model, s.size, u.unit_name, rate, qty, amount FROM tmp_expense_detail t LEFT join expense_heads h on h.id=t.head_id LEFT JOIN items i on i.id=t.item_id LEFT JOIN category c on c.id=t.category_id LEFT JOIN brands b on b.id=t.brand_id LEFT JOIN models m on  m.id=t.model_id LEFT JOIN sizes s on s.id=t.size_id LEFT JOIN units u on u.id=t.unit_id
        ');
        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $ops = '<div class="btn-group">';
            // $ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit(' . $value->id . ')"><i class="fa fa-edit"></i></button>';
            $ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove(' . $value->id . ')"><i class="fa fa-trash"></i></button>';
            $ops .= '</div>';

            $data['data'][$key] = array(
                $value->id,

                $value->head,
                $value->item_name,
                $value->category,
                $value->brand,
                $value->model,
                $value->size,
                $value->unit_name,
                $value->rate,
                $value->qty,
                $value->amount,

                $ops,
            );
        }

        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $response = array();

        $fields['id'] = $this->request->getPost('id');
        $fields['head_id'] = $this->request->getPost('headId');
        $fields['item_id'] = $this->request->getPost('itemId');
        $fields['category_id'] = $this->request->getPost('categoryId');
        $fields['brand_id'] = $this->request->getPost('brandId');
        $fields['model_id'] = $this->request->getPost('modelId');
        $fields['size_id'] = $this->request->getPost('sizeId');
        $fields['unit_id'] = $this->request->getPost('unitId');
        $fields['rate'] = $this->request->getPost('rate');
        $fields['qty'] = $this->request->getPost('qty');
        $fields['amount'] = $this->request->getPost('amount');

        $this->validation->setRules([
            'head_id' => ['label' => 'Head id', 'rules' => 'required|numeric|max_length[11]'],
            'item_id' => ['label' => 'Item id', 'rules' => 'required|numeric|max_length[11]'],
            'category_id' => ['label' => 'Category id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'brand_id' => ['label' => 'Brand id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'model_id' => ['label' => 'Model id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'size_id' => ['label' => 'Size id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'unit_id' => ['label' => 'Unit id', 'rules' => 'permit_empty|numeric|max_length[11]'],
            'rate' => ['label' => 'Rate', 'rules' => 'required|numeric|max_length[11]'],
            'qty' => ['label' => 'Qty', 'rules' => 'required|numeric|max_length[11]'],
            'amount' => ['label' => 'Amount', 'rules' => 'required|numeric|max_length[11]'],
        ]);

        if ($this->validation->run($fields) == FALSE) {
            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
        } else {
            if ($this->tmpexpensedetailModel->update($fields['id'], $fields)) {
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
            if ($this->tmpexpensedetailModel->where('id', $id)->delete()) {
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