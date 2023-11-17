<?php
namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct($data)
    {
        return $this->productRepository->create($data);
    }

    public function deleteProduct($id)
    {
        return $this->productRepository->delete($id);
    }

   
}
