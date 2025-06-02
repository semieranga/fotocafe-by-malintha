-- CREATE DATABASE IF NOT EXISTS fotocafe;
-- USE fotocafe;

-- CREATE TABLE users (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(100),
--     email VARCHAR(100) UNIQUE,
--     password VARCHAR(100),
--     role ENUM('user','admin') DEFAULT 'user'
-- );

-- CREATE TABLE bookings (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     user_id INT,
--     place VARCHAR(255),
--     date DATE,
--     time TIME,
--     price DECIMAL(10,2),
--     status ENUM('pending', 'accepted', 'rejected') DEFAULT 'pending',
--     FOREIGN KEY (user_id) REFERENCES users(id)
-- );

-- CREATE TABLE payments (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     user_id INT,
--     booking_id INT,
--     amount DECIMAL(10,2),
--     payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
--     FOREIGN KEY (user_id) REFERENCES users(id),
--     FOREIGN KEY (booking_id) REFERENCES bookings(id)
-- );

-- CREATE TABLE services (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(100),
--     price DECIMAL(10,2),
--     image VARCHAR(255)
-- );

-- CREATE TABLE gallery (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     image VARCHAR(255)
-- );