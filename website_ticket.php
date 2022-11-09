<?php
session_start();
if(!$_SESSION['ticket'])
{
    header("location:website_register_usernmae_.php");
}
?>