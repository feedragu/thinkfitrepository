<html lang="en">
<head>
<title>Bootstrap Theme Company</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
div.calendar {
    width: 100%;
    border: 3px solid gray;
}

header {
    padding: 2em;
    color: white;
    background-color: #4d88ff;
    clear: right;
    text-align: center;
}


.tablediv {
    border-left: 3px solid gray;
    margin-top:2%;
    width:80%;
    float:right;
}

.title{
	float: top;
}

input[type=text], input[type=password], input[type=date], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button, input[type=button] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

input[type=button]:hover {
	opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.logindiv {
	float: left;
    width: 19%;
    text-align: center;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    height: 25%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

button.psw {
    float: right;
    width: auto;
    padding: 10px 18px;
    width: 40%;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 50%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: -2% auto 5% auto ; 
    border: 3px solid #888;
    width: 30%;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}


@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

@-webkit-keyframes animateout {
    from {-webkit-transform: scale(1)} 
    to {-webkit-transform: scale(0)}
}
    
@keyframes animateout {
    from {transform: scale(1)} 
    to {transform: scale(0)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    button.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Company</h1>
  <p>We specialize in blablabla</p>
  <form class="form-inline" action="prova.php" method="POST">
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address">
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>
<nav class="pagination">
  <ul>
    <li class="prev"><a href="#"><span>&lsaquo; Prev</span></a></li>
    <li><a href="#"><span>1</span></a></li>
    <li><a class="active" href="#"><span>2</span></a></li>
    <li><a href="#"><span>3</span></a></li>
    <li><a href="#"><span>4</span></a></li>
    <li><a href="#"><span>5</span></a></li>
    <li class="next"><a href="#"><span>Next &rsaquo;</span></a></li>
  </ul>
</nav>
<nav class="navbar navbar-default navbar-fixed-top col-lg-12">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Logo</a> </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li> <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">REGISTRATI</button></li>
        <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<style>
.bg-grey {
    background-color: #f6f6f6;
}
</style>
<style>
.jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
}

.container-fluid {
    padding: 60px 50px;
}
</style>
<style>
.logo {
    font-size: 200px;
}
@media screen and (max-width: 768px) {
    .col-sm-4 {
        text-align: center;
        margin: 25px 0;
    }
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2>
      <h4>Lorem ipsum..</h4>
      <p>Lorem ipsum..</p>
      <button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4"> <span class="glyphicon glyphicon-signal logo"></span> </div>
  </div>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="registrazione.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar-1577909_960_720.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
	  <label><b>Email</b></label>
      <input type="email" placeholder="Inserisci Password" name="email">
      
      <label><b>Password</b></label>
      <input type="password" placeholder="Inserisci Password" name="psw">
      
       
        
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit" class="psw" >Registrati</button>

    </div>
  </form>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
	  <label><b>Email</b></label>
      <input type="email" placeholder="Inserisci Email" name="email">
      
      <label><b>Password</b></label>
      <input type="password" placeholder="Inserisci Password" name="psw">
      
       
        
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit" class="psw" >Logga</button>

    </div>
  </form>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4"> <span class="glyphicon glyphicon-globe logo"></span> </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
      <p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
    </div>
  </div>
</div>
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>
</html>