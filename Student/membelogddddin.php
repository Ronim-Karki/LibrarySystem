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
<body background="Image/hero_books_2019.png">



<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
	
  <a href="membelogddddin.php">Home</a>
  <a href="Profile.php">Profile</a>
  <a href="books.php">Books</a>
  <a href="Borrow.php">Borrow</a>
  <a href="Feedback.php">Feedback</a>
  <a href="#">Payment</a>
  <a href="#">Status</a>
  <a href="contact.php">Contact</a>
  <a href="logout.php">Logout  <img src="Image/logout-icon-png-0.png"></a>

</div>

<h1 style="text-align:center">Welcome to online library System <?php
{
	  echo "<img height='50px' style='border-radius: 20px 'src='Image/".$_SESSION['pic']."'>";
	echo $_SESSION['login_user'];
}
?></h1>
<span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<div class="wrap">
   <form class="search" method="post" name="form1">
      <input type="text" name="search" class="searchTerm" placeholder="Search for books......" required>
      <button type="submit" name="submit" class="searchButton"><img src="Image/download.png">
        <i class="fa fa-search"></i>
     </button>
   </form>
   
</div>

    <?php
		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%'");
			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No books found. Try searching again";
			}
			else
			
			{
				echo "List of the books.";
				echo "<table class='table table-bordered table-hover' style='width:80%; margin-left:250px;'>";
		
		echo "<tr style ='background-color:white;'>";
		
			echo "<th>"; echo "ID"; echo "</th>";
			echo "<th>"; echo "Name"; echo "</th>";
			echo "<th>"; echo "Auther"; echo "</th>";
			echo "<th>"; echo "Edition"; echo "</th>";
			echo "<th>"; echo "Status"; echo "</th>";
			echo "<th>"; echo "Quantity"; echo "</th>";
			echo "<th>"; echo "Department"; echo "</th>";
			echo "</tr>";
		while($row=mysqli_fetch_assoc($q))
		{
			echo "<tr>";
			echo "<td>"; echo $row['BID']; echo"</td>";
			echo "<td>"; echo $row['Name']; echo"</td>";
			echo "<td>"; echo $row['Author']; echo"</td>";
			echo "<td>"; echo $row['Edtition']; echo"</td>";
			echo "<td>"; echo $row['Status']; echo"</td>";
			echo "<td>"; echo $row['Quantity']; echo"</td>";
			echo "<td>"; echo $row['Department']; echo"</td>";
				
			echo "</tr>";
		}
		echo "</table>";
				
			}
		}
		/*if button is not pressed.
		else
		{
			$res=mysqli_query($db, "SELECT * FROM `books`;");
		echo "<table class='table table-bordered table-hover'>";
		
		echo "<tr style ='background-color:white;'>";
		
			echo "<th>"; echo "ID"; echo "</th>";
			echo "<th>"; echo "Name"; echo "</th>";
			echo "<th>"; echo "Auther"; echo "</th>";
			echo "<th>"; echo "Edition"; echo "</th>";
			echo "<th>"; echo "Status"; echo "</th>";
			echo "<th>"; echo "Quantity"; echo "</th>";
			echo "<th>"; echo "Department"; echo "</th>";
			echo "</tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td>"; echo $row['BID']; echo"</td>";
			echo "<td>"; echo $row['Name']; echo"</td>";
			echo "<td>"; echo $row['Author']; echo"</td>";
			echo "<td>"; echo $row['Edtition']; echo"</td>";
			echo "<td>"; echo $row['Status']; echo"</td>";
			echo "<td>"; echo $row['Quantity']; echo"</td>";
			echo "<td>"; echo $row['Department']; echo"</td>";
				
			echo "</tr>";
		}
		echo "</table>";
			
		}\
		*/
    	
	?>

</br><br>
<br>

<div class="announcement">
	<h2 style="font-size:36px; text-align:center" >Announcement!!!!!</h2>
     <?php
		$res=mysqli_query($db, "SELECT * FROM `announce`;");
		echo "<table class='table table-bordered table-hover' style='width:50%; margin-left:450px; text-align:center '>";
		
		echo "<tr style ='background-color:white;'>";
		
			echo "<th>"; echo "SN"; echo "</th>";
			echo "<th>"; echo "Announcement"; echo "</th>";
			echo "</tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td>"; echo $row['S.N']; echo"</td>";
			echo "<td>"; echo $row['Announcement']; echo"</td>";
		}

			?> 
            
		
    </div>
   
</body>
</html> 
