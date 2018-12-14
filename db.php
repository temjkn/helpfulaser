<?php

$dbhost="localhost";
$dbname="catalog";
$username="root";
$password="";

$db= new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);

//получение каталога ламп и линз
function get_lamp_all(){
    global $db;
    $lamp = $db -> query("SELECT * FROM lamps_and_lins"); 
    return $lamp;
}

//получение каталога лазеров
function get_lasers_all(){
    global $db;
    $lasers=$db -> query("SELECT * FROM lamps_and_lins"); 
    return $lasers;
}

//получение товара по id
function get_product_by_id($category_id){
    global $db;
    $products =$db -> query("SELECT * FROM lamps_and_lins WHERE id = $category_name"); 
    foreach ($products as $product){
        return $product["category_name"];
    }
}


