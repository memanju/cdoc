<?php
session_start();
$db = mysqli_connect('localhost','root','','Student');
if(isset($_GET['action']) && $_GET['action']=="add")
{ 
    $fname=$_GET['name'];
    $fprice=$_GET['price'];
    $id=$_SESSION["orderid"];
    $query="INSERT INTO orders (orderid,name,price) VALUES ('$id','$fname','$fprice')";
    mysqli_query($db,$query);
}
?>
