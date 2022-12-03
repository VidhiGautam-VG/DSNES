/*---------create database-------->*/
CREATE DATABASE customer; 

/*------------use the database------>*/
use customer; 

/*----------Create Table-------------*/
CREATE TABLE customers ( login_ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL, phone VARCHAR(30) NOT NULL ); 

