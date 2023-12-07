<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
	// The MySQL table name
    
    protected $table      = 'products';

    // The type of object to return

	protected $returnType = 'array';

    // The updatable fields

	protected $allowedFields = ['id_product','product_name','price','id_category'];
}	

	
			