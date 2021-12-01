<?php
	include "connection.php";
	
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
  position: fixed;
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

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="membelogddddin.php">Home</a>
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
<br>

<span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>





</body>
</html> 
