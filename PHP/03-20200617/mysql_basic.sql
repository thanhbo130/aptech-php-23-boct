CREATE DATABASE aptech_php_23;
CREATE TABLE aptech_php_23.users2(
	ID int,
    Lastname varchar(255),
    Firstname varchar(255),
    class varchar(255)
);
INSERT INTO aptech_php_23.users(ID,Lastname,Firstname)
VALUE (1,"Cao","Thanh Bo");
DROP TABLE aptech_php_23.users2;
ALTER TABLE aptech_php_23.users
ADD class varchar(255);
INSERT INTO aptech_php_23.users(ID,Lastname,Firstname,class)
VALUE(2,"Tran","Thanh Son","PHP");
INSERT INTO aptech_php_23.users(ID,Lastname,Firstname,class)
VALUE(3,"Mai","Van Cuong","HTML");
SELECT * FROM aptech_php_23.users
WHERE ID = 3;
SET SQL_SAFE_UPDATES = 0;
delete FROM aptech_php_23.users WHERE ID=1;
truncate TABLE aptech_php_23.users;
CREATE TABLE usersData(
 id INT PRIMARY KEY AUTO_INCREMENT,
 Name VARCHAR(255) UNIQUE,
 Pass VARCHAR(255)
);
INSERT INTO aptech_php_23.usersData(Name,Pass)
VALUES ("Cao Thanh Bo","aaa"),
("Tran Thanh Son","ab1");
Select * From aptech_php_23.usersdata;
INSERT INTO aptech_php_23.usersData(Name,Pass)
VALUES ("Mai Van Cuong","x2x"),
("Cap Kim Thao","123");
select * from aptech_php_23.usersdata;
UPDATE aptech_php_23.usersdata
SET id = 10
WHERE id = 1;
UPDATE aptech_php_23.usersdata
SET pass = "yyy"
WHERE id = 10;
UPDATE aptech_php_23.usersdata
SET name = "Tran Thanh Son"
WHERE id = 10;


