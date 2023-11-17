<?php

// app/Console/Commands/DeleteCategoryCommand.php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\CategoryService;

class DeleteCategoryCommand extends Command
{
    protected $signature = 'category:delete {id}';
    protected $description = 'Delete a category';

    public function handle(CategoryService $categoryService)
    {
        $id = $this->argument('id');
        $categoryService->deleteCategory($id);

        $this->info("Category with ID '$id' deleted successfully.");
    }
}
