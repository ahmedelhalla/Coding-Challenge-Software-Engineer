<?php
namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory($data)
    {
        return $this->categoryRepository->create($data);
    }

    public function deleteCategory($id)
    {
        return $this->categoryRepository->delete($id);
    }

    
}
