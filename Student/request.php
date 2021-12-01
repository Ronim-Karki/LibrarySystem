<?php
	include "connection.php";
	
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position:fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 12px 12px 12px 42px;
  margin-top:15px;
  text-decoration: none;
  font-size: 30px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  
   font-family: Arial;
}

* {
  box-sizing: border-box;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position:relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding:15px;
  height: 30px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
	background-image:url(Image/download.png);
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 50%;
  padding-top:15px;
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.wrap img{
	height:25px;
	opacity:0.7;
	margin-top:4px;
}
.sidenav img{
	height:25px;
	opacity:0.7;
	margin-top:7px;
	color:#999;
	padding-left:-2px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 40px;}
  
  .sidenav a {font-size: 18px;}
  
  .box{
	  width:500px;
	  color:#999;
  }
  .box book{
	  width:200px;
  }

</style>
</head>
<body>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="adminlogged.php">Home</a>
  <a href="Profile.php">Profile</a>
  <a href="books.php">Books</a>
  <a href="Borrow.php">Borrow</a>
  <a href="Feedback.php">Feedback</a>
  <a href="#">Payment</a>
  <a href="Status.php">Status</a>
  <a href="contact.php">Contact</a>
  <a href="logout.php">Logout  <img src="Image/logout-icon-png-0.png"></a>
</div>

<br>
<br>

<div id="main">
<span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776; </span>
<div class="container">
<div class="box">
	<h2 style="text-align:center"> Request Book</h2><br>
    <form class="request" action="" method="post" style="width:50%; margin-left:250px;">
    <input type="hidden" name="uname" class="form-control" placeholder="Username"><br>
    	<input type="text" name="BID" class="form-control" placeholder="Book ID"><br>
       

      

<button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" type="submit" name="submit" style="background-color:#090; width:30%; margin-left:130px" >Request</button>
    </form>
    </div>
    <?php
		if(isset($_POST['submit']))
	
			{
				$ID = $_POST['BID'];
				$sql = mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[login_user]','$ID','','','');");
				?>
                <script type="text/javascript">
					alert("Book Requested.");
					window.location="Status.php";
					</script>
                    <?php
			}
			
				
		

	?>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</div>
</body>
</html>