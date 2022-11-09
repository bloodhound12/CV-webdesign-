<?php
//error_reporting(0);
session_start();
require("website_database.php");

// This is for Resgister

if(isset($_POST['register'])) 
{
$username=$_POST['username_2'];
$password = $_POST['password_2'];
$hashed_password = md5($password);
$email=$_POST['email'];
$country=$_POST['country'];

$q = "insert into register (ID, username, password, email, country) values (NULL, '$username', '$hashed_password', '$email', '$country' )";
$conn->query($q);

header("location:website_register_username_.php");
}


// this is for login
if(isset($_POST['login']))
{
    $username_1=$_POST['username_1'];
    $password=$_POST['password_1'];

    $hashed_password = md5($password);
    // echo $hashed_password;

   $q= "select * from register where username= '$username_1' and password='$hashed_password'";
   $result = $conn->query($q);
  
    // TO count the select of row
  $count =$result->fetch_assoc();
  
  $myid = $count['ID'];
  
  if ($myid) {
    // echo "Login sucess";
    $_SESSION['ticket']='yes';
    header("location:website_cart.html");
  }
  else
  // if login fail 
  {
    header("location: website_loginfail_.php");
  }

}
 
//  this is for add product
if(isset($_POST['add']))
{
  $name=$_POST['pr1'];
  $price=$_POST['pr2'];
  $description=$_POST['pr3'];
  $quantity=$_POST['pr4'];

  $q = "insert into addyourorder (ID, name, price, description, quantity) values (Null, '$name', '$price', '$description', '$quantity' )";
  $conn->query($q);
  
  header("location:webiste_datastore_delete_update.php");

}

if(isset($_GET['product_id'])){
  $pid = $_GET['product_id'];
  $q = "delete from addyourorder where id= '$pid' ";
  $conn->query($q);
  header("location:webiste_datastore_delete_update.php");
}


// update product
if(isset($_POST['add']))  {
  $name=$_POST['pr1'];
  $price=$_POST['pr2'];
  $description=$_POST['pr3'];
  $quantity=$_POST['pr4'];
  $pid =$_POST['pid'];

  $q= "update addyourorder set name='pr1', price='pr2', description='pr3', quantity='pr4' where id='pid'";
  $conn->query($q);
}


  
   
   
?>