
<?php
   include "server1.php";
if(isset($_POST['sub'])) {
      $userid = $_POST['userid'];
      $password = $_POST['pwd'];      
      $qry = "SELECT * from register ";
      
      $result = mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
      
      if(mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) {
          if($userid==$row['userid']){

            header('location:types.html');
          }
        }
      } 
 }
?>


