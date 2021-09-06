<?php

// Database Connection
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=beginner_php_crud_tutorial', 'root', 'Cariota1.');
// Set error handling
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;

if(!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header("Location: index.php");