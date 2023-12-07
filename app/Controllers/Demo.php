<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Demo extends BaseController
{
    public function index()
    {
        $productsModel = new ProductsModel();
        $data['products'] = $productsModel->findAll();
        return view('demo/index', $data);
    }

    
}

