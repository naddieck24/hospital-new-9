<?php 

session_start();

if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}

if(isset($_POST['insert'])){

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Home</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');

. {
    text-align: center;
    padding: 15px;
    margin: 10px 50px 10px 300px;

}

.img {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(hospital.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;

}

.sidebar {
    width: 300px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background-color: #868686;
    z-index: 100;
    background: linear-gradient(115deg, #697476 30%, lightgray 90%);
}

.sidebar-brand {
    height: 105px;
    padding: 1rem 0rem 1rem 2rem;


}

.sidebar-brand span {
    display: inline-block;
    padding-right: 1rem;
}

.sidebar-menu li {
    width: 100%;
    margin-bottom: 1.5rem;
    padding-left: 1rem;
}


.menu-wrapper .sidebar-menu a {
    padding-left: 1rem;
    display: block;
    color: black;
    font-size: 1.1rem;
}

.menu-wrapper .sidebar-menu li a.active {
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;
}

.menu-wrapper .sidebar-menu li:hover {
    background: #fff;
    padding-top: 5px;
    padding-bottom: 5px;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;
    border-style: solid;
    border-width: 2px;
}

.sidebar-menu a span: {
    font-size: 1.5rem;
    padding-right: 1rem;
}

.main-content {
    margin-left: 300px;
}

header {
    display: flex;
    justify-content: space-between;
    padding: 1rem 1.7rem;
    background-color: #4F4949;
    align-items: center;
    position: fixed;
    width: calc(100% - 300px);
    top: 0;
    z-index: 100;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

header label span {
    font-size: 1.7rem;
    padding-left: 1rem;
}

main {
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px);
}

.rooms {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 2rem;
    padding: 2rem;
    margin-top: 1rem;

}

.room {
    display: flex;
    justify-content: space-between;
    padding: 2rem;
    background: darkgray;
    text-align: center;
}

.log {
    border-color: red;
}

.welcome {
    letter-spacing: 1px;
}

.navbar {
    background: #fff;
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
    border-radius: 30px 0px 0px 30px;
}



.navbar .nav_right>ul {
    display: flex;
    align-items: center;
}

.navbar .nav_right ul li.nr_li {
    margin-left: 10px;
    cursor: pointer;
    color: #fff;
    font-size: 20px;
    position: relative;
}

.navbar .nav_right ul li.nr_li:hover {
    color: #cefffc;
}

.navbar .nav_right ul li img {
    width: 35px;
    vertical-align: middle;
    margin-top: 10px;
}

.navbar .dd_menu {
    position: absolute;
    right: -25px;
    top: 47px;
    display: flex;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.25);
    display: none;
}

.navbar .dd_menu .dd_left {
    background: #2E2929;
    padding: 15px 20px;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
}

.navbar .dd_menu .dd_left li {
    color: #fff;
}

.navbar .dd_menu .dd_right {
    padding: 15px 20px;
}

.navbar .dd_menu li {
    margin-bottom: 10px;
    color: #868686;
}


.navbar .dd_menu:before {
    content: "";
    position: absolute;
    top: -20px;
    right: 30px;
    border: 10px solid;
    border-color: transparent transparent #fff transparent;
}

.navbar .dd_main.active .dd_menu {
    display: flex;
}

h2 {
    color: #Fff;
}

.wet {
    font-family: cambria;
}

.log-out:hover {
    color: red;
}

.contrainermy-3 {
    background-color: darkgray;
    border-radius: 7px;
    justify-content: space-between;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.9);
}

tr:nth-child(even) {
    background-color: lightgray;
}

tr:nth-child(odd) {
    background-color: #fff;
}
</style>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="../css/hospital.jpeg" alt="profile_img" width="75px" heigth="75px"> St. Therese</h2>
        </div>
        <div class="menu-wrapper">
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="../admin.php" class="nav-link"> <span class="fa-solid fa-house"></span><span></span>
                            <span class="wet">Pending Reservation</span></a>
                    </li>
                    <li>
                        <a href="" class="active"> <span class="fa-solid fa-bed"></span><span></span>
                            <span class="wet">Rooms</span></a>
                    </li>
                    <li>
                        <a href="viewall.php" class="nav-link"> <i class="fa-solid fa-file-circle-check"></i>
                            <span class="wet">View all Reservation</span></a>
                    </li>
                </ul>
            </div>
        </div>



    </div>
    <div class="main-content">

        <header>
            <h2>
                <label for="">
                </label>
                Rooms
            </h2>

            <div class="wrapper">
                <div class="navbar">
                    <div class="welcome">
                        <?php echo  $_SESSION['fname'] . "</h4>"; ?>
                    </div>
                    <div class="nav_right">
                        <ul>

                            <li class="nr_li dd_main">
                                <img src="../images/log.png" alt="profile_img">
                                <div class="dd_menu">

                                    <div class="dd_right">
                                        <ul>

                                            <a class="log-out" href="../logout.php">Logout</a>
                                        </ul>
                                    </div>
                                </div>


                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </header>

        <main>

            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="CompleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New room</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="completeroomtype" class="form-label">Room type</label>
                                <input type="text" class="form-control" id="completeroomtype" placeholder="Enter room type">
                            </div>
                            <div class="form-group">
                                <label for="completeroomnumber" class="form-label">Room number</label>
                                <input type="text" class="form-control" id="completeroomnumber" placeholder="Enter room number">
                            </div>
                            <div class="form-group">
                                <label for="completeroomcapacity" class="form-label">Room capacity</label>
                                <input type="text" class="form-control" id="completeroomcapacity" placeholder="Enter room capacity">
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="addroom()">Save</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!----Update Modal --->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="updateroomtype" class="form-label">Room type</label>
                                <input type="text" class="form-control" id="updateroomtype" placeholder="Enter room type">
                            </div>
                            <div class="form-group">
                                <label for="updateroomnumber" class="form-label">Room number</label>
                                <input type="text" class="form-control" id="updateroomnumber" placeholder="Enter room number">
                            </div>
                            <div class="form-group">
                                <label for="updateroomcapacity" class="form-label">Room capacity</label>
                                <input type="text" class="form-control" id="updateroomcapacity" placeholder="Enter room capacity">
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" onclick="updateDetails()" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" id="hiddendata">
                        </div>
                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="contrainermy-3">
                        <h3 style="padding:10px 10px; " class="text-center">Private Room</h3>
                        <button style="margin-left:780px; margin-bottom: 20px;" type="button" class="btn btn-dark"
                            data-bs-toggle="modal" data-bs-target="#CompleteModal">
                            +Add new room
                        </button>
                        <div id="displayDataTable"></div>
                    
                    </div>
                </div>

              
                    <div class="contrainermy-3">
                        <h3 style="padding:10px 10px; color:blackgray;" class="text-center">Private</h3>
                        <button style="margin-left:800px; margin-bottom: 20px;" class="btn btn-dark  ">+ Add new
                            users</button>
                        <table class="table">
                            <thead>
                                <tr>
                                
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
            </div>

    </div>

    </main>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            displayData();
        });
        // display fuction
        function displayData(){
            var displayData="true";
            $.ajax({
                url:"display.php",
                type:'post',
                data:{
                    displaySend: displayData
                },
                success:function(data,status){
                    $('#displayDataTable').html(data);
                }
            });
        }
        //Add Room
        function addroom(){
            var roomtypeAdd=$('#completeroomtype').val();
            var roomnumberAdd=$('#completeroomnumber').val();
            var roomcapacityAdd=$('#completeroomcapacity').val();

            $.ajax({
                url:"insert.php",
                type: 'post',
                data:{
                    roomtypeSend: roomtypeAdd,
                    roomnumberSend: roomnumberAdd,
                    roomcapacitySend: roomcapacityAdd
                },
                success: function(data,status){
                   // console.log(status)
                   $('#CompleteModal').modal('hide');

                   displayData();
                }
            });
        }

        //Delete Record
        function DeleteRoom(deleteid){
            $.ajax({
                url:"delete.php",
                type: 'post',
                data:{
                    deletesend:deleteid
                },
                success:function(data,status){
                    displayData();
                }
            });
        }

        //Update Record
        function GetDetails(updateid){
            $('#hiddendata').val(updateid)

            $.post("update.php", {updateid:updateid},function(data,status){
                 var roomid=JSON.parse(data);
                 $('#updateroomtype').val(roomid.room_type);
                 $('#updateroomnumber').val(roomid.room_number);
                 $('#updateroomcapacity').val(roomid.room_capacity);
            });
            $('#updateModal').modal('show');
        }
        //while update button onclick
        function updateDetails(){
            var updateroomtype=$('#updateroomtype').val();
            var updateroomnumber=$('#updateroomnumber').val();
            var updateroomcapacity=$('#updateroomcapacity').val();
            var hiddendata=$('#hiddendata').val();

            $.post("update.php",{
                updateroomtype:updateroomtype,
                updateroomnumber:updateroomnumber,
                updateroomcapacity:updateroomcapacity,
                hiddendata:hiddendata,
            },function(data,status){
                $('#updateModal').modal('hide');
                displayData();
            });
        }
    </script>
</body>

</html>