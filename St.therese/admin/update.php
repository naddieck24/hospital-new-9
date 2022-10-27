<?php

include '../config.php';

if(isset($_POST['updateid'])){
    $rooms_id=$_POST['updateid'];

    $sql="Select * from `room` where room_id=$rooms_id";
    $result=mysqli_query($conn,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){
        $response=$row;
    }
    echo json_encode($response);
}else {
    $response['status']=200;
    $response['message']="Invalid or data not found";
}

//update query

if(isset($_POST['hiddendata'])){
    $uniqueid=$_POST['hiddendata'];
    $room_type=$_POST['updateroomtype'];
    $room_number=$_POST['updateroomnumber'];
    $room_capacity=$_POST['updateroomcapacity'];

    $sql ="update `room` set room_type='$room_type',room_number='$room_number',room_capacity='$room_capacity' where room_id= $uniqueid";

    $result=mysqli_query($conn,$sql);
}
?>