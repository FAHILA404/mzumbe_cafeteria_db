CREATE DATABASE IF NOT EXISTS mzumbe_cafeteria_db;
USE mzumbe_cafeteria_db;

CREATE TABLE IF NOT EXISTS orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    cafeteria_name VARCHAR(50) NOT NULL,
    food_item VARCHAR(100) NOT NULL,
    quantity INT NOT NULL,
    order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);