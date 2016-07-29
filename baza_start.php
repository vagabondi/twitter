<?php
$conn=new mysqli('localhost', 'root', 'coderslab', 'twitter');
    if($conn->connect_error) {
        die("Błąd bazy danych."); 
    }
    


