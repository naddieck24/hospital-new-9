<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>Document</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.center {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate( -50%, -50%);
  text-align: center;
}

/* Add styles to the form container */
.container1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate( -50%, -50%);
}
.container1 .close-btn{
    position: absolute;
    right: 20px;
    top: 1;
    font-size: 18px;
    cursor: pointer;
}
.close-btn:hover{
    color: #3498db;
}
.container1 {
   display:;
   background: #fff;
   width: 410px;
   padding: 30px;
   box-shadow: 0 0 8px rgba(0,0,0,0.4);
}


.container1 .text {
    font-size: 35px;
    font-weight: 600;
    text-align: center;
}
.container1 form{
    margin-top:20px;
}
.data {
   height: 45px;
   width: 100%;
   margin: 40px 0;
}

.data input{
    height: 100%;
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    border: 1px solid lightgrey;
}
.data label{
    font-size: 18px;
}
.btn{
    margin:30px 0;
    width: 100%;
    height: 45px;
    position: relative;
    overflow: hidden;
}
.btn .inner{
    height:100%;
    width:300%;
    position: absolute;
    left:-100%;
    z-index:-1;
    background:#1CD95B;  
}



.btn button {
    height: 100%;
    width: 100%;
    background: none;
    border: none;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    color: #fff;

}

</style>
</head>

<body>
<h2>Popup Form</h2>
<p>Click on the button at the bottom of this page to open the login form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="center" id="myForm">
    <div class="container1">
    <label for="show" class="close-btn fas fa-times"></label>
        <h1>Adding room</h1>
            <div class="data">
                <label>Room number</label>
                <input type="text">
            </div>
        <div class="data">
            <label>Room Capacity</label>
            <input type="text">
        </div>
        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>