<?php
include "server.php";
 
 $name = $_POST['name'];
 $room = $_POST['text'];

 $sql= "INSERT INTO `again word chat`.`fan chat`(`name`, `room`) VALUES ('$name','$room')";

 mysqli_query($con,$sql);
 mysqli_close($con);
 

?>