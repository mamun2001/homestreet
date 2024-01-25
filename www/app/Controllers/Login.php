<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\UserprojectsModel;

class Login extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('login', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'user_name' => $this->request->getVar('name'),
                'user_email' => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }

    public function login()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UsersModel();
        $userProject = new UserprojectsModel();
        $login = $this->request->getVar('login');
        $password = $this->request->getVar('password');
        $data = $model->where('login', $login)->first();
        $res = $userProject->where('userid', $data['id'])->first();

        if ($data) {
            if (md5($password) == $data['password']) {
                $ses_data = [
                    'user_id' => $data['id'],
                    'user_name' => $data['full_name'],
                    'user_email' => $data['email'],
                    'user_type' => $data['user_type'],
                    'active' => $data['active'],
                    'project_id' => $res['projectid'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function passchange()
    {
        $session = session();
        $model = new UsersModel();
        $fields['id'] = session()->get('user_id');

        $cur_password = $this->request->getPost('cur_password');
        $new_password = $this->request->getPost('new_password');
        $con_new_password = $this->request->getPost('con_new_password');

        $data = $model->where('id', $fields['id'])->first();

        if ($new_password == $con_new_password) {
            if ($data) {
                if (md5($cur_password) == $data['password']) {
                    $fields['password'] = md5($new_password);
                    $model->update($fields['id'], $fields);
                    return redirect()->to('/');
                } else {
                    $session->setFlashdata('msg', 'Wrong Current Password');
                    return redirect()->to('/changepassword');
                }
            } else {
                $session->setFlashdata('msg', 'User not Found');
                return redirect()->to('/changepassword');
            }
        } else {
            $session->setFlashdata('msg', 'New passwords do not match');
            return redirect()->to('/changepassword');
        }
    }
    public function passchangeUser()
    {
        $session = session();
        $model = new UsersModel();
        $fields['id'] = session()->get('user_id');

        $cur_password = $this->request->getPost('cur_password');
        $new_password = $this->request->getPost('new_password');
        $con_new_password = $this->request->getPost('con_new_password');

        $data = $model->where('id', $fields['id'])->first();

        if ($new_password == $con_new_password) {
            if ($data) {
                if (md5($cur_password) == $data['password']) {
                    $fields['password'] = md5($new_password);
                    $model->update($fields['id'], $fields);
                    return redirect()->to('/');
                } else {
                    $session->setFlashdata('msg', 'Wrong Current Password');
                    return redirect()->to('/changepass');
                }
            } else {
                $session->setFlashdata('msg', 'User not Found');
                return redirect()->to('/changepass');
            }
        } else {
            $session->setFlashdata('msg', 'New passwords do not match');
            return redirect()->to('/changepass');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    public function changePassword()
    {
        return view('chngpass');
    }
    public function changePasswordUser()
    {
        return view('chngpass-u');
    }

    public function dashboard()
    {
        $session = session();
        echo "Welcome back, " . $session->get('user_name');
    }
}