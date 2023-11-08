<?php

  session_start();
  ob_start();
  // Clear all session variables
  if(isset($_COOKIE) ){
 
    setcookie('ma_kh', "", time() - 10800);
    unset($_COOKIE['ma_kh']);
  }


 
  
  // Redirect to the login page or any other page
  header('Location: ../signIn.php');
  exit();
  ob_end_flush();
?>

