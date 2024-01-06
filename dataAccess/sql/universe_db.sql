-- Tạo cơ sở dữ liệu
CREATE DATABASE IF NOT EXISTS UNIVERSE;
use universe;
create table if not exists categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    slug varchar(255),
    `description` text,
    created_by int,
    created_at datetime,
	updated_by int,
    updated_at datetime,
	deleted_by int,
    deleted_at datetime
);
create table if not exists products(
    id INT AUTO_INCREMENT PRIMARY KEY,
    thumbnail text,
    `name` VARCHAR(255) NOT NULL,
    brand ENUM("Chanel", "Prada", "Denim", "Louis vuitton", "Calvin Klein"),
    slug varchar(255),
    `description` text,
     price DECIMAL(12, 2) NOT NULL,
     rating float,
    created_by int,
    created_at datetime,
	updated_by int,
    updated_at datetime,
	deleted_by int,
    deleted_at datetime,
    category_id int not null,
	FOREIGN KEY (category_id) REFERENCES categories(id)
);
create table if not exists product_images(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    url VARCHAR(255) NOT NULL,
    product_id int not null,
	FOREIGN KEY (product_id) REFERENCES products(id)
);
create table if not exists discounts(
	id INT AUTO_INCREMENT PRIMARY KEY,
    discount_price DECIMAL(10, 2),
    discount_from datetime,
    discount_to datetime,
    created_by int,
    created_at datetime,
	updated_by int,
    updated_at datetime,
	deleted_by int,
    deleted_at datetime,
    product_id int not null,
	FOREIGN KEY (product_id) REFERENCES products(id)
);
create table if not exists product_inventories(
	id INT AUTO_INCREMENT PRIMARY KEY,
    quantity int NOT NULL,
	quantity_buyed int,
    size varchar(100),
    color varchar(100),
	created_by int,
    created_at datetime,
	updated_by int,
    updated_at datetime,
	deleted_by int,
    deleted_at datetime,
    product_id int not null,
	FOREIGN KEY (product_id) REFERENCES products(id)
);
create table if not exists orders(
	id INT AUTO_INCREMENT PRIMARY KEY,
    buyer_name varchar(255),
    buyer_email varchar(255),
	buyer_phone varchar(15),
    buyer_address varchar(255),
    total decimal(10,2),
    shipping_cost decimal(10,2),
    created_at datetime,
    `status` ENUM("PENDING", "DONE", "CANCEL", "ON_DELIVERY")
);
create table if not exists order_details(
	id INT AUTO_INCREMENT PRIMARY KEY,
    product_name varchar(255),
    product_quantity int,
    product_price decimal(10,2),
	product_discount_price decimal(10,2),
    product_color varchar(100),
    product_size varchar(100),
    product_id int not null,
    order_id int not null,
	FOREIGN KEY (product_id) REFERENCES products(id),
	FOREIGN KEY (order_id) REFERENCES orders(id)
);
create table if not exists payment_details(
	id INT AUTO_INCREMENT PRIMARY KEY,
    payment_type varchar(255),
    provider varchar(255),
    `account` varchar(255),
    expiry varchar(255),
    order_id int not null,
	FOREIGN KEY (order_id) REFERENCES orders(id)
)
create table if not exists users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100),
    email varchar(255),
    `password` varchar(255),
    role enum("user","admin"),
    created_by int,
    created_at datetime,
	updated_by int,
    updated_at datetime,
	deleted_by int,
    deleted_at datetime
);