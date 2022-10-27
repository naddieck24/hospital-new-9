<?php

include '../config.php';

if(isset($_POST['displaySend'])){
    $table = '<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">SI no</th>
        <th scope="col">Room type</th>
        <th scope="col">Room number</th>
        <th scope="col">Room capacity</th>
        <th scope = "col">Operations</th>
      </tr>
    </thead>';
    $sql = "Select * from `room`";
    $result= mysqli_query($conn,$sql);
    $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $room_id = $row['room_id'];
        $room_type = $row['room_type'];
        $room_number = $row['room_number'];
        $room_capacity = $row['room_capacity'];
        $table.= '<tr>
        <td scope="row">'.$number.'</td>
        <td>'.$room_type.'</td>
        <td>'.$room_number.'</td>
        <td>'.$room_capacity.'</td>
        <td>
        <button class="btn btn-info" onclick="GetDetails('.$room_id.')">Update</button>
        <button class="btn btn-danger" onclick="DeleteRoom('.$room_id.')">Delete</button>
        </td>
      </tr>';
      $number++;
    }
    $table.='</table>';
    echo $table;
    
}

?>

