<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function create($data)
    {
        return Product::create($data);
    }

    public function delete($id)
    {
        return Product::destroy($id);
    }
}
