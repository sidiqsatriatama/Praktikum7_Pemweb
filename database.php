<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'latihan';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}