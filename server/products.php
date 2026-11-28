<?php
require __DIR__ . '/cors.php';
require __DIR__ . '/db.php';

header('Content-Type: application/json; charset=utf-8');

$stmt = $pdo->query(
    'SELECT id, category_id, name, slug, description, price, stock, image, created_at
     FROM products
     ORDER BY created_at DESC'
);

$products = $stmt->fetchAll();

echo json_encode($products, JSON_UNESCAPED_UNICODE);