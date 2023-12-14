-- Tạo cơ sở dữ liệu
CREATE DATABASE IF NOT EXISTS UNIVERSE;
USE UNIVERSE;

-- Tạo bảng Users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(15),
    email VARCHAR(120) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `role`  ENUM('user', 'admin') NOT NULL
);

-- Tạo bảng UserImages
CREATE TABLE IF NOT EXISTS user_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url VARCHAR(255) NOT NULL,
    size INT,
    `format` VARCHAR(5),
    upload_date DATETIME,
    user_id INT,
	FOREIGN KEY (user_id) REFERENCES users(id)
);



-- Tạo bảng Products
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    short_description TEXT,
    long_description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    rating FLOAT,
    quantity INT,
    quantity_buyed INT,
    size VARCHAR(20) NOT NULL,
    color VARCHAR(255) NOT NULL
);

-- Tạo bảng ProductImages
CREATE TABLE IF NOT EXISTS product_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url VARCHAR(255) NOT NULL,
    size INT,
    `format` VARCHAR(5),
    upload_date DATETIME,
	product_id INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Tạo bảng Comments
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    created_by VARCHAR(255),
    product_id INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Tạo bảng Categories
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL
);

-- Tạo bảng ProductsCategories
CREATE TABLE IF NOT EXISTS product_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- Tạo bảng Orders
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    quantity INT default(1),
    `status` ENUM('hủy', 'chờ thanh toán', 'đã thanh toán', 'đã giao hàng thành công') NOT NULL,
    total DECIMAL(10, 2),
    size VARCHAR(20),
    color VARCHAR(50),
    date_time DATETIME,
    product_id INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Tạo bảng Carts
CREATE TABLE IF NOT EXISTS carts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    `type` VARCHAR(50),
    date_time DATETIME,
    `status` ENUM('thành công', 'thất bại'),
    FOREIGN KEY (order_id) REFERENCES orders(id)
);
