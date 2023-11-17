<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProductService;

class CreateProductCommand extends Command
{
    protected $signature = 'product:create {name} {description} {price} {--image=}';
    protected $description = 'Create a new product';

    public function handle(ProductService $productService)
    {
        $name = $this->argument('name');
        $description = $this->argument('description');
        $price = $this->argument('price');
        $image = $this->option('image');

        $productService->createProduct([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => $image,
        ]);

        $this->info("Product '$name' created successfully.");
    }
}    
