<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <title>Home</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');
    .   {
        text-align: center;
        padding: 15px;
        margin: 10px 50px 10px 300px;
        
    }
    .img {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(hospital.jpeg);
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
        border-width:2px;
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
        padding: 1rem 1.7rem ; 
        background-color: #4F4949;
        align-items: center;
        position: fixed;
        width: calc(100% - 300px);
        top: 0;
        z-index: 100;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
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
   .navbar{
	background: #fff;
	width: 100%;
	height: 60px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 0 10px;
    border-radius: 30px 0px 0px 30px;
}



.navbar .nav_right > ul{
	display: flex;
	align-items: center;
}

.navbar .nav_right ul li.nr_li{
	margin-left: 10px;
	cursor: pointer;
	color: #fff;
	font-size: 20px;
	position: relative;
}

.navbar .nav_right ul li.nr_li:hover {
    color: #cefffc;
}

.navbar .nav_right ul li img{
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
    box-shadow: 0px 0px 3px rgba(0,0,0,0.25);
    display: none;
}

.navbar .dd_menu .dd_left{
	background: #2E2929;
	padding: 15px 20px;
	border-top-left-radius: 15px;
	border-bottom-left-radius: 15px;
}

.navbar .dd_menu .dd_left li{
	color: #fff;
}

.navbar .dd_menu .dd_right{
	padding: 15px 20px;
}

.navbar .dd_menu li{
	margin-bottom: 10px;
	color: #868686;
}


.navbar .dd_menu:before{
	content: "";
	position: absolute;
	top: -20px;
	right: 30px;
	border: 10px solid;
	border-color: transparent transparent #fff transparent;
}

.navbar .dd_main.active .dd_menu{
	display: flex;
}
h2 {
    color: #Fff;
}
.wet{
    font-family: cambria;
}

</style>
<body>
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><img src="images/hospital.jpeg" alt="profile_img" width="75px" heigth="75px"> St. Therese</h2>
    </div>
    <div class="menu-wrapper">
        <div class="sidebar-menu" id="barnav">
            <ul>
                <li>
                    <a href="welcome.php" class="nav-link"> <span class="fa-solid fa-house"></span><span></span>
                    <span class="wet">Home</span></a>
                </li>
                <li>
                    <a href="check.php" class="active"> <span class="fa-solid fa-check"></span><span></span>
                    <span class="wet">Check Room Availability</span></a>
                </li>
                <li>
                    <a href="view.php" class="nav-link"> <i class="fa-solid fa-file-circle-check"></i>
                    <span  class="wet">View my Reservation</span></a>
                </li>
            </ul>   
        </div>  
    </div>

    
    
</div>
        <div class="main-content">
            
            <header>
                <h2>
                    <label for ="">
                    </label>
                    Room Availability
                </h2>  
                
                
                <div class="wrapper">
                    <div class="navbar">
                            <div class="welcome">
                                <?php echo "<h4>Welcome " . $_SESSION['username'] . "</h4>"; ?> 
                            </div>
                        <div class="nav_right">
                            <ul>
                                <li class="nr_li dd_main">
                                    <img src="images/profile.png" alt="profile_img">
                                    
                                    <div class="dd_menu">
                                        <div class="dd_left">
                                            <ul>
                                                <li><i class="fa-solid fa-user"></i></li>
                                                <li><i class="fa-solid fa-envelope"></i></li>
                                                <li><i class="fa-solid fa-address-book"></i></li>
                                                <li><i class="fa-solid fa-mobile"></i></li>
                                                <li><i class="fas fa-sign-out-alt"></i></li>
                                            </ul>
                                        </div>
                                        <div class="dd_right">
                                            <ul>
                                                <li> <?php echo  $_SESSION['fname'] . $_SESSION['lname']  ; ?></li>
                                                <li><?php echo  $_SESSION['email'] ; ?></li>
                                                <li><?php echo  $_SESSION['address'] ; ?></li>
                                                <li><?php echo  $_SESSION['mobile_number'] ; ?></li>
                                                <a href="logout.php">Logout</a>
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
          Check me!

            </form>

            
        </main>
            
            
        </div>
        
<script>
	var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})
</script>


</body>
</html>

