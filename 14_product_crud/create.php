<?php

// Database Connection
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=beginner_php_crud_tutorial', 'root', 'Cariota1.');
// Set error handling
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errors = [];

$title = '';
$price = '';
$description = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    

    if(!$title) {
        $error[] = 'Product title is required';
    }

    if(!$price) {
        $error[] = 'Product price is required';
    }

    if (is_dir('images')) {
        mkdir('images');
    }

    if (empty($errors)) {

        $image = $_FILES['image'] ?? null;
        $imagePath = '';
        if ($image && $image['tmp_name']) {

            $imagePath = 'images/'.randomString(8).'/'.$image['name'];
            mkdir(dirname($imagePath));

            move_uploaded_file($image['tmp_name'], $imagePath);
        }


        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
        VALUES (:title, :image, :description, :price, :date)
        ");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);

        $statement->execute();
        header('Location: index.php');
    }

    
}

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }

    return $str;
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Products CRUD</title>
  </head>
  <body>
    <h1>Create new Product</h1>

    <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach($errors as $error) { ?> 
            <div><?php $error ?></div>
        <?php } ?>
    </div>
    <?php endif; ?>

    <form action='' method='POST' enctype="multipart/form-data">
        <div class="mb-3">
            <label>Product Image</label>
            <input type="file" name='image' class="form-control" >
        </div>
        <div class="mb-3">
            <label>Product Title</label>
            <input type="text" name='title' class="form-control" value='<?php echo $title ?>' >
        </div>
        <div class="mb-3">
            <label>Product Description</label>
            <textarea class="form-control" name='description' value='<?php echo $description ?>'></textarea>
        </div>
        <div class="mb-3">
            <label>Product Price</label>
            <input type="number" step="0.01" name='price' class="form-control" value='<?php echo $price ?>'>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </body>
</html>