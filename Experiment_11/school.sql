CREATE DATABASE IF NOT EXISTS school;
USE school;
 CREATE TABLE IF NOT EXISTS students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 age TINYINT NOT NULL,
 grade VARCHAR(10) NOT NULL
 );
 INSERT INTO students (name, age, grade) VALUES
 ('Alice Johnson', 15, 'A'), ('Bob Kumar', 16, 'B');