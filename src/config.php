<?php
//common variable and contant file
error_reporting(E_ALL ^ E_NOTICE);  
session_start();
// Products array for fetching each product.
$Products = array(
    array("id"=>101,"name"=>"Basket Ball","image"=>"basketball.png","price"=>150),
    array("id"=>102,"name"=>"Football","image"=>"football.png","price"=>120),
    array("id"=>103,"name"=>"Soccer","image"=>"soccer.png","price"=>110),
    array("id"=>104,"name"=>"Table Tennis","image"=>"table-tennis.png","price"=>130),
    array("id"=>105,"name"=>"Tennis","image"=>"tennis.png","price"=>100));

//     $id = (isset($_GET['id']) ? $_GET['id'] : '');
//     if ($_SESSION['cart'] == false) {
//         $cartItems = array();
//         $_SESSION['cart'] = array();
//         $_SESSION['cartItems'] = array();
//     }   
//     if (isset($id)) {
//         // $_SESSION['cart']= $id;
//         $v  = (isset($_GET['value']) ? $_GET['value'] : '');
//         $_SESSION['cart'][] = $id;
//         $cartItems = $_SESSION['cart'];
//         $unique = (array_count_values($cartItems));
//         // array_push($_SESSION['cart'],$id);
//     }
// if(isset($_GET['val'])){
//     $val = $_GET['val'];
//     $id = $_GET['Id'];
//     $_SESSION['cart'][] += $id;
//     $cartItems = $_SESSION['cart'];
//     $unique = (array_count_values($cartItems));
//     foreach($unique as $key=>$value){
//         if($key==$id){
//             $unique[$key]=$val-2; 
//             $_SESSION['cartItems']=$unique;
//             header('location: products.php?id='.$id.'&value='.$val.'');
//         }
//       }
// }





?>
