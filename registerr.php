<?php 
   include "server1.php";
   
   if(isset($_POST['sub'])) {
      $userid = $_POST['userid'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['pwd'];      
      $qry = 
      "INSERT INTO register (name, userid, email, password) VALUES ('$userid', '$name', '$email', '$password')";
      
      mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
      header('location:login1.php');
      /*echo $qry."<br/>";*/
   }
 ?>
   
