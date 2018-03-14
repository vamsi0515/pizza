<!DOCTYPE html>
<html>
<p>You are successfully logged in!</p>
<?php
   session_start();
   if(isset($_SESSION['userid'])) {
      echo 'you are logged in...';
   } else {
      echo "<p>Please login first</p>";
      header('location:login1.php');
   }
?>
</html>
