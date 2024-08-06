<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .form-container .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            margin-bottom: .5rem;
            display: block;
        }
        .btn {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <!-- Category Form -->
            <div class="category-form">
                <h2>Add Category</h2>
                <form method="post" action="{{ route("create") }}">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" name="name" class="form-control" id="categoryName" placeholder="Category Name">
                    </div>
                    <div class="form-group">
                        <label for="categoryDescription">Description</label>
                        <input type="text" name="description" class="form-control" id="categoryDescription" placeholder="Category Description">
                    </div>
                    <input type="hidden" name="table" class="form-control" value="categories">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
            <!-- Product Form -->
            <div class="product-form">
                <h2>Add Product</h2>
                <form  method="post" action="{{ route("create") }}">
                    @csrf
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" name="name" class="form-control" id="productName" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <label for="productCategory">Category</label>
                        <select id="productCategory" class="form-control" name="category">
                            <option selected>Choose Category...</option>
                            <option>Electronics</option>
                            <option>Fashion</option>
                            <option>Home & Garden</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price</label>
                        <input type="number" name="price" class="form-control" id="productPrice" placeholder="Product Price">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Description</label>
                        <input type="text" name="description" class="form-control" id="productDescription" placeholder="Product Description">
                    </div>
                    <input type="hidden" name="table" class="form-control" value="products">

                    
                    <button type="submit" data-table="products" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
