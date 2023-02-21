-- Create database
CREATE DATABASE StudentManagementSystem;

-- Create table (MYSQL)
CREATE TABLE Students(
     ID INT NOT NULL AUTO_INCREMENT,
     Name VARCHAR(100) NOT NULL,
     NIM VARCHAR(20) NOT NULL,
     Email VARCHAR(200) NOT NULL,
     Campus VARCHAR(100) NOT NULL,
     Programs VARCHAR(100) NOT NULL,

     PRIMARY KEY(ID)
);

-- Display the data from the database table
SELECT * FROM StudentManagementSystem.Students;

-- Adding new column
ALTER TABLE `Students` 
	ADD `Profile` VARCHAR(250) NOT NULL
    AFTER `Programs`;

-- Remove column
ALTER TABLE `Students` 
     DROP `Profile`;