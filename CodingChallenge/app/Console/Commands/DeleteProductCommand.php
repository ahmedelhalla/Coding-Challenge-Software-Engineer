<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProductService;

class DeleteProductCommand extends Command
{
    protected $signature = 'product:delete {id}';
    protected $description = 'Delete a product';

    public function handle(ProductService $productService)
    {
        $id = $this->argument('id');

        if ($productService->deleteProduct($id)) {
            $this->info("Product with ID '$id' deleted successfully.");
        } else {
            $this->error("Unable to delete product with ID '$id'.");
        }
    }
}
