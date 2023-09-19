<?php

namespace App\Models;
use CodeIgniter\Model;

class ItemModel extends Model{
    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price'];
    protected $returnType = 'object';
}