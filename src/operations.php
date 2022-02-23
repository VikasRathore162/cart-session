<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include_once 'config.php';
$action = (isset($_GET['action']) ? $_GET['action'] : '');
$id = (isset($_GET['id']) ? $_GET['id'] : '');

if ($_SESSION['cartItems'] == false) {
    $_SESSION['unique'] = array();
    $_SESSION['cartItems'] = array();
}

switch ($action) {
    case 'add':
        foreach ($Products as $arr => $product) {
            if ($id == $product['id']) {
                // $_SESSION['cartItems'] += array($product);

                array_push($_SESSION['cartItems'], $id);

                $_SESSION['unique'] = array_count_values($_SESSION['cartItems']);
                // print_r( $_SESSION['cartItems']);
                header("location: products.php");
            }
        }

        break;

    case 'delete':
  
        for($i=0;$i<count($_SESSION['cartItems']);$i++){
            if($id==$_SESSION['cartItems'][$i]){
                unset($_SESSION['cartItems'][$i]);
               
            }
        }
        $_SESSION['cartItems'] = array_values($_SESSION['cartItems']);
        $_SESSION['unique'] = array_count_values($_SESSION['cartItems']);
        header("location: products.php");
        break;
    


}
echo '<br>cart  ';
print_r($_SESSION['cartItems']);
echo "<br>uhniq  ";
print_r($_SESSION['unique']);

?>