<?php
include "config/connection.php";
session_start();
if(isset($_POST['login'])){
  $uname = $_POST['uname']; // assign value from name="uname"
  $upass = md5($_POST['upass']); // assign value from name="upass"
   $query = "SELECT * FROM m_admin WHERE username='$uname' AND password='$upass'";
    $result = mysqli_query($conn, $query);
      $row = mysqli_num_rows($result);
       if($row != 0 ){  // admin ditemukan
          $_SESSION['admin'] = 1;
         header('Location: admin/dasbor.php');
       } else { // admin tidak ditemukan
         
         header('Location: login.php?wrong=1');
       }
}