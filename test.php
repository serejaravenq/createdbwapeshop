
<?php 

$db = new mysqli("localhost", "root", "");
$db->query("CREATE DATABASE IF NOT EXISTS wapeshop");
$db->select_db("wapeshop");
$db->query("CREATE TABLE IF NOT EXISTS admins(
	idadmins INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	email VARCHAR(45) , 
	password VARCHAR(45)
	)");
$db->query("INSERT INTO admins (email,Password) 
	VALUES('mail1@gmail.ru', '123456')");
$db->query("CREATE TABLE IF NOT EXISTS categories(
	idcategories INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(45)		
	)");
$db->query("CREATE TABLE IF NOT EXISTS Products(
	idProducts INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(45),
	price VARCHAR(45),
	thumbnail VARCHAR(45),
	category_id INT NOT NULL,
	FOREIGN KEY (category_id) REFERENCES categories(idcategories)
	)");
$r = $db->query ("SELECT * FROM admins");
while ($row = $r->fetch_assoc())  
    echo "Мыло: ".$row['email'].", пароль: ".$row['Password'];
?>