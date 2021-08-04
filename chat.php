<!-- INSERT INTO `fan chat` (`id`, `name`, `room`, `date and time`) VALUES ('1', 'rita', 'it is a chat room', '2021-03-21 21:52:55.000000'); -->


<?php

include "server.php";

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    
    $sql = "INSERT INTO `again word chat`.`nameroom`(`name`) VALUES ('$name')";

    if ($con->query($sql) == true) {
        echo "Succesessfully complite";
        include "./chat2.php";
    }
    else{
        echo "error:$sql<br>$con->error";
    }
    $con->close();
}













?>