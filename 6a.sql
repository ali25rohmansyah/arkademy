-- Membuat Database
CREATE DATABASE arkademy;

-- Membuat Table Cashier
CREATE TABLE cashier(
    id int,
    name VARCHAR(255)
);

-- Membuat Table Category
CREATE TABLE category(
    id int,
    name VARCHAR(255)
);

-- Membuat Table Product
CREATE TABLE product (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255),
    price INT,
    id_category INT,
    id_cashier INT
);

-- Memasukan Data ke dalam Table Cashier
INSERT INTO cashier (id, name) VALUES (1, 'Pevita Pearce');
INSERT INTO cashier (id, name) VALUES (2, 'Raisa Andriana');
INSERT INTO cashier (id, name) VALUES (3, 'Ali Rohmansyah');

-- Memasukan Data ke dalam Table Category
INSERT INTO category (id, name) VALUES (1, 'food');
INSERT INTO category (id, name) VALUES (2, 'drink');

-- Memasukan Data ke dalam Table Product
INSERT INTO product (name, price, id_category, id_cashier) VALUES ('Latte', 10000, 2, 1);
INSERT INTO product (name, price, id_category, id_cashier) VALUES ('Cake', 20000, 1, 2);
INSERT INTO product (name, price, id_category, id_cashier) VALUES ('Pasta', 30000, 1, 3);

-- Melakukan Join Tiga
SELECT C.name AS cashier, P.id As product, CT.name As category, P.price As price
FROM product P
JOIN cashier C ON C.id = P.id_cashier
JOIN category CT ON CT.id = P.id_category
ORDER BY P.price;