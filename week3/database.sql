-- SQL file for Laptop Shop Management System
-- Database: LaptopShop
-- Table: laptops

-- Create database
CREATE DATABASE IF NOT EXISTS `LaptopShop` 
  DEFAULT CHARACTER SET utf8mb4 
  COLLATE utf8mb4_unicode_ci;
USE `LaptopShop`;

-- Create table for laptop data
CREATE TABLE IF NOT EXISTS `laptops` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(100) NOT NULL,
  `model` VARCHAR(150) NOT NULL,
  `cpu` VARCHAR(100),
  `ram` VARCHAR(50),
  `storage` VARCHAR(100),
  `price` DECIMAL(10,2) NOT NULL,
  `quantity` INT(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB 
  DEFAULT CHARSET=utf8mb4 
  COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO `laptops` (`brand`, `model`, `cpu`, `ram`, `storage`, `price`, `quantity`) VALUES
('Dell', 'XPS 13', 'Intel Core i7', '16GB', '512GB SSD', 1500.00, 10),
('Apple', 'MacBook Air M2', 'Apple M2', '8GB', '256GB SSD', 1200.00, 5),
('Asus', 'ROG Zephyrus G14', 'AMD Ryzen 9', '32GB', '1TB SSD', 1800.00, 3),
('HP', 'Spectre x360', 'Intel Core i5', '8GB', '512GB SSD', 1100.00, 7),
('Lenovo', 'ThinkPad X1 Carbon', 'Intel Core i7', '16GB', '1TB SSD', 1700.00, 4);

