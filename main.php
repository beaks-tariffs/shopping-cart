<?php
// main.php
require_once 'product.php';
require_once 'user.php';

// Create products
$product1 = new Product("Laptop", 999.99);
$product2 = new Product("Smartphone", 499.99);

// Create users
$user1 = new User("Alice");
$user2 = new User("Bob");

// Simulate shopping actions
$user1->addToCart($product1);
$user2->addToCart($product2);

// Display user information and shopping carts
$user1->displayInfo();
$user1->viewCart();

$user2->displayInfo();
$user2->viewCart();
?>
