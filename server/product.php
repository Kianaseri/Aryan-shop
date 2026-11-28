<?php
require __DIR__ . '/cors.php';
require __DIR__ . '/db.php';

header('Content-Type: application/json; charset=utf-8');

$slug = $_GET['slug'] ?? '';

if ($slug === '') {
    http_response_code(400);
    echo json_encode(['error' => 'slug is required']);
    exit;
}

$stmt = $pdo->prepare(
    'SELECT id, category_id, name, slug, description, price, stock, image, created_at
     FROM products
     WHERE slug = :slug'
);
$stmt->execute(['slug' => $slug]);
$product = $stmt->fetch();

if (!$product) {
    http_response_code(404);
    echo json_encode(['error' => 'product not found']);
    exit;
}

echo json_encode($product, JSON_UNESCAPED_UNICODE);