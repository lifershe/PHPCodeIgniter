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
}
