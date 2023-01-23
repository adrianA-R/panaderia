<?php
    $server = 'localhost';
    $admin = 'root';
    $password = '';
    $database = 'bdpanaderia';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $admin, $password);
    } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
    }
?>