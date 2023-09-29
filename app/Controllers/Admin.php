<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function login()
	{
		if($this->request->getMethod()=='post'){
            $post= $this->request->getPost(['email', 'password']);
            // dd($post['email']);
            $admin_model= new \App\Models\AdminModel();
			$admin= $admin_model->where('email', $post['email'])
			->where('password', $post['password'])
			->first();
			$session= session();
			if(!$admin){
				// dd('invalid');
				
				$session->setflashdata('invalid', 'Invalid username or password');
			}
			else
			{
				$this->setAdminSession($admin);
				return redirect()->to('item/index');

			}

        }
		
		return view('admin/login');
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('admin/login');
	}

	public function setAdminSession($admin){
		$data=[
			'id'=>$admin->id,
			'name'=>$admin->name,
			'email'=>$admin->email,
			'isAdminLoggedIn'=>true
		];
		session()->set($data);
	}

}