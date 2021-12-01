<?php
	include "connection.php";
	include "nav sidebar1.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Books</title>
    <style>
	.table{
		margin:10px 0 0 10px;
		width:80%;
		margin-left:250px;
	}
	.table th{
		background-color:#666;
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
.request{
  width: 15%;
  padding-top:250px;
  position: absolute;
  float:right;
  top: 15%;
  left: 85%;
  transform: translate(-50%, -50%);
}
.request img{
	height:25px;
	opacity:0.7;
	margin-top:4px;
}
	</style>
 </head>
 <body>
 <div class="wrap">
   <form class="search" method="post" name="form1">
      <input type="text" name="search" class="searchTerm" placeholder="Search for books......" required>
      <button type="submit" name="submit" class="searchButton"><img src="Image/download.png">
        <i class="fa fa-search"></i>
     </button>
   </form>
   <br>
<br>

</div>
<br>
<br>
<br>

<div class="request">
   <form class="search" method="post" name="form1">
      <input type="text" name="BID" class="searchTerm" placeholder="Book ID" required>
      <button type="submit" name="submit1" class="searchButton">
        <i class="fa fa-search"></i>Request
     </button>
   </form>
    <?php
		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%'");
			if(mysqli_num_rows($q)==0)
			{
				echo "List of the books.";
				echo "Sorry! No books found. Try searching again";
			}
			else
			{
				echo "<table class='table table-bordered table-hover' style='width:80%; margin-left:250px;'>";
		
		echo "<tr style ='background-color:black;'>";
		
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
 <!-----------requestbook---->
 
   <br>
<br>

</div>
 	<h2 style="text-align:center">List of books.</h2>
    <?php
    	$res=mysqli_query($db, "SELECT * FROM `books`;");
		{
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
		}
		
		
		
			
		
	?>
   
    
 </body>
 </html>