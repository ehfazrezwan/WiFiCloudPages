<?php

  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  $redirect = $_SESSION['ref_url'];

  header("Location: ".$redirect."?username=".$username."&password=".$password."&ret_url=https://www.aamranetworks.com/");

 ?>
