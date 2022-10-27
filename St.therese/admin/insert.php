<?php

include '../config.php';

extract($_POST);

if(isset($_POST['roomtypeSend']) && isset($_POST['roomnumberSend']) && isset($_POST['roomcapacitySend'])){
   $sql="insert into `room` (room_type,room_number,room_capacity) values ('$roomtypeSend','$roomnumberSend','$roomcapacitySend')";

   $result=mysqli_query($conn,$sql);
}
?>