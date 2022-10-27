<?php

include '../config.php';

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];

    $sql="delete from `room` where room_id=$unique";
    $result=mysqli_query($conn,$sql);
}

?>