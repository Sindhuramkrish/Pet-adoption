
CREATE DATABASE IF NOT EXISTS pet_adoption;
USE pet_adoption;

CREATE TABLE IF NOT EXISTS admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS pets (
    pet_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    type VARCHAR(30),
    age INT,
    status VARCHAR(10) DEFAULT 'Available'
);

CREATE TABLE IF NOT EXISTS adoption_requests (
    request_id INT AUTO_INCREMENT PRIMARY KEY,
    pet_id INT,
    user_name VARCHAR(100),
    email VARCHAR(100),
    contact VARCHAR(20),
    FOREIGN KEY (pet_id) REFERENCES pets(pet_id)
);
