<?php

// app/Console/Commands/CreateCategoryCommand.php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\CategoryService;

class CreateCategoryCommand extends Command
{
    protected $signature = 'category:create {name}';
    protected $description = 'Create a new category';

    public function handle(CategoryService $categoryService)
    {
        $name = $this->argument('name');
        $categoryService->createCategory(['name' => $name]);

        $this->info("Category '$name' created successfully.");
    }
}

