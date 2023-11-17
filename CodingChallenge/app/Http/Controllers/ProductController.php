<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Product;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function createForm()
    {
        return view('products.create');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload image if provided
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('product_images');
        }

        $this->productService->createProduct($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function index()
    {
        $products = Product::paginate(10);

        return view('products.index', compact('products'));
    }
}
