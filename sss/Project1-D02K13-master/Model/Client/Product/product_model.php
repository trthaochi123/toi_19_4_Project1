<?php
function cate(){
    $id =  $_GET['cat_id'];
    include_once('Config/connect.php');

    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    $sql = "SELECT product.*, category.* 
    FROM product
        INNER JOIN category ON product.cat_id = category.cat_id
        WHERE category.cat_id = '$id'
        ORDER BY product.id ASC ";
    $query = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    $arr['cat_id'] = $id;
    return $arr;
}
function index() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    return $arr;
}
switch($redirect) {
    case 'product': $arr = index(); break;
    case 'cate': $arr = cate(); break;
}

?>