<?php

namespace App\Controllers;

class Item extends BaseController
{
    public function index(): string
    {
        $item_model = new \App\Models\ItemModel();
        $data['items']= $item_model->findAll();
        return view('item/index', $data);
    }

    public function test(): string
    {
        return ('some data from the function test');
    }

    public function add()
    {
        $data = array();
        helper(['form']);

        if($this->request->getMethod()=='post'){           
            $post= $this->request->getPost(['name', 'price', 'description']);
            $rules= [
                'name' => ['label' => 'Item name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required'],
                'description' => ['label' => 'Description', 'rules' => 'required']
            ];
            if(! $this->validate($rules))
            {
                $data['validation']= $this->validator;
                //dd($data['validation']);
            }
            else{
                $item_model = new \App\Models\ItemModel();            
                $item_model->save($post);
                return redirect()->to('item/index');
            }            
        }

        return view('item/add', $data);
    }
    // public function edit($id)
    // {   
    //     helper(['form']);
    //     $item_model = new \App\Models\ItemModel();
    //     $item_model->save($post);
    //     $data['item'] = $item_model->find($id);
    //     //dd($item_model);
    //     return view('item/edit', $data);
    // }

    public function edit($id)
    {
        helper(['form']);
        $item_model = new \App\Models\ItemModel();

        if ($this->request->getMethod() === 'post') {
            $rules= [
                'name' => ['label' => 'Item name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required'],
                'description' => ['label' => 'Description', 'rules' => 'required']
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $post = $this->request->getPost(['name', 'price', 'description']);
                $item_model->update($id, $post);
                return redirect()->to('item/index');
            }
        }

        // Fetch the item data for editing
        $data['item'] = $item_model->find($id);

        return view('item/edit', $data);
    }

    public function delete($id)
    {
        $item_model = new \App\Models\ItemModel();
        $data['item'] = $item_model->find($id);
    
        if ($data['item']) {
            if ($this->request->getMethod() === 'post') {
                $item_model->delete($id);
    
                return redirect()->to('item/index');
            }
    
            return view('item/delete', $data);
        }
    }     

    public function view($id)
    {
        $item_model = new \App\Models\ItemModel();
        $data['item'] = $item_model->find($id);
        //dd($item_model);
        return view('item/view', $data);
    }
    public function insert()
    {
        // if($this->request->getMethod()=='post'){           
        //     $post= $this->request->getPost(['name', 'price', 'description']);
        //     // dd($post);
        //     // dd($item_model);
        //     $item_model = new \App\Models\ItemModel();


        //     $item_model->save($post);
        //     return redirect()->to('item/index');
        // }
    }
}