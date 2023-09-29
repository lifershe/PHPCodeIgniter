<?php

namespace App\Controllers;

class Item extends BaseController
{
    public function index(): string
    {
    	$item_model= new \App\Models\ItemModel();
    	$data['items']= $item_model->findAll();
         return view('item/index', $data);
    }

    public function test()
    {
        try{
        echo $x;
        }
        catch(\Exception $e){
            echo 'error';
        }

    }

    public function myform(){
        helper(['form']);
        return view('item/myform');
    }

    public function view($id)
    {
       $item_model= new \App\Models\ItemModel();
       $data['item']= $item_model->find($id);
       return view('item/view', $data);
    }
    public function add()
    {
        $data= array();
        helper(['form']);

         if($this->request->getMethod()=='post'){
            $post= $this->request->getPost(['name', 'price', 'description', 'url', 'qty']);
            //dd($post);
            $rules= [
                'name' => ['label' => 'Item name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required|numeric'],
                'description' => ['label' => 'Description', 'rules' => 'required'],
                'url' => ['label' => 'url', 'rules' => 'required'],
                 'qty' => ['label' => 'qty', 'rules' => 'required'],
            ];
            if (! $this->validate($rules))
            {
                $data['validation']= $this->validator;
                // dd($data['validation']);
            }
            else {
            $item_model= new \App\Models\ItemModel();
            $item_model->save($post);
            return redirect()->to('item/index');
            }
        }

        return view('item/add', $data);

    }

    public function edit($id)
    {
        helper(['form']);
       

        if($this->request->getMethod()=='post'){
            $post= $this->request->getPost(['name','price', 'description', 'url', 'qty']);
            $post['name']= strip_tags($_POST['name']);
            $post['description']= strip_tags($_POST['description']);
            $post['url']= strip_tags($_POST['url']);
            $post['qty']= strip_tags($_POST['qty']);

            $rules= [
                'name' => ['label' => 'Item name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required|numeric'],
                'description' => ['label' => 'Description', 'rules' => 'required'],
                'url' => ['label' => 'URL', 'rules' => 'required'],
                'qty' => ['label' => 'Qty', 'rules' => 'required'],
            ];
            if (! $this->validate($rules))
            {
                $data['validation']= $this->validator;
                // dd($data['validation']);
            }
            else {
                $item_model= new \App\Models\ItemModel();
                $item_model->update($id, $post);
                return redirect()->to('item/index');
            }
        }

        $item_model= new \App\Models\ItemModel();
        $data['item']= $item_model->find($id);
        return view('item/edit', $data);

    }

    public function delete($id)
    {
        
            $item_model= new \App\Models\ItemModel();
            $data['item']= $item_model->find($id);
            return view('item/delete', $data);

    }

    public function destroy($id)
    {
           $item_model= new \App\Models\ItemModel();
            $item_model->delete($id);
            return redirect()->to('item/index');
    }

    public function search()
    {
        if ($this->request->getMethod() == 'post') {
            $searchQuery = $this->request->getPost('search_query');

            // Query the database for items matching the search query
            $itemModel = new \App\Models\ItemModel();
            $items = $itemModel->like('name', $searchQuery)->findAll();

            $data['items'] = $items;

            return view('item/index', $data);
        }
    }

}