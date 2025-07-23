<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    exit;
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? '';
$price = $_POST['price'] ?? 0;
$image = $_POST['image'] ?? '';
$category = $_POST['category'] ?? '';
$quantity = intval($_POST['quantity'] ?? 1);

if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['quantity'] += $quantity;
} else {
    $_SESSION['cart'][$id] = [
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'category' => $category,
        'quantity' => $quantity
    ];
}

echo json_encode(['success' => true]);
