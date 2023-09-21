<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login(): string
    {
        if($this->request->getMethod()=='post'){           
            $post= $this->request->getPost(['email', 'password']);
           // dd($post);
            $admin_model = new \App\Models\AdminModel();
            $admin = $admin_model->where('email', $post['email'])
            ->where('password', $post['password'])
            ->first();
            if($admin){
                $session = session();
                $session->setFlashdata('invalid', 'Invalid username or password');
            }
            else{
                $this->setAdminSession($admin);
                return redirect()->to('item/index');
            }
        } 
        
        return view('admin/login');
    }

    public function setAdminSession(): string
    {
        $data=[
            'id'=>$admin->id,
            'name'=>$admin->name,
            'email'=>$admin->email,
            'isAdminLoggedIn'=>true
        ];
        session()->set($data);
        
        return view('admin/login');
    }
}