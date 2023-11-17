<!-- resources/views/products/index.blade.php -->
<?php
    use App\Models\Product;

    $products = Product::paginate(10);
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Listing</h1>

        <?php if($products->isEmpty()): ?>
            <p>No products available.</p>
        <?php else: ?>
            <?php foreach($products as $product): ?>
                <div>
                    <h3><?php echo e($product->name); ?></h3>
                    <p><?php echo e($product->description); ?></p>
                    <p>Price: <?php echo e($product->price); ?></p>
                    <img src="<?php echo e(asset($product->image)); ?>" alt="Product Image" style="max-width: 200px;">

                    <!-- Add more details or actions as needed -->

                    <hr>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php echo e($products->links()); ?>
    </div>
@endsection
