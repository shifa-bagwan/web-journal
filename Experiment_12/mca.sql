CREATE DATABASE MCA;
USE MCA;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT
);

INSERT INTO students (name, age) VALUES
('Alice', 15),
('Bob', 16),
('Charlie', 14),
('David', 17);
