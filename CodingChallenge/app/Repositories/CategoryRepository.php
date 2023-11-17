<?php
namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function create($data)
    {
        return Category::create($data);
    }

    public function delete($id)
    {
        return Category::destroy($id);
    }

    // Additional methods for fetching, updating, etc.
}
