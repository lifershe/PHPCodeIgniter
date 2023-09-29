<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class GColumnChartController extends Controller
{
    public function index() {
        return view('chart');
    }
    
    public function initChart()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tblitem');
        $query = $builder->select("COUNT(id) as count, qty as s, name, price");
        $query = $builder->where("DAY(created_at) GROUP BY DAYNAME(created_at), s")->get();
        $record = $query->getResult();
        $products = [];
        foreach ($record as $row) {
            $products[] = array(
                'name' => $row->name,
                'qty'  => floatval($row->s),
                'price' => floatval($row->price)
            );
        }

        $data['products'] = ($products);
        return view('chart', $data);
    }
 
}