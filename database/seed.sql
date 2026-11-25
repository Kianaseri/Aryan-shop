USE aryan_shop;

INSERT INTO categories(name,slug) VALUES
('مانتو', 'manteau'),
('شلوار', 'pants'),
('شال و روسری', 'scarf');

INSERT INTO products (category_id, name, slug, description, price, stock, image) VALUES
  (1, 'مانتو کتان مشکی', 'black-cotton-manteau', 'مانتوی کتان راسته', 1250000, 10, 'manteau-1.jpg');