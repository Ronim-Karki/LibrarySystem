<?php
	include "connection.php";
	include "nav sidebar1.php";
	session_start();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book requested</title>
</head>
<style>
.container{
	width:80%;
	
	margin-left:250px;
	padding-bottom:10px;
	background-color:#999;
}
.srch{
	width:20%;
	margin-top:10px;
	padding-top:10px;
	
}
</style>

<body>

<div class="container">
<div class="srch" style=>
<form method="post" action="" name="form1" >
 <input type="text" name="uname" class="form-control" placeholder="Username" required="required" style="margin-bottom:5px;" />

 <input type="text" name="BID" class="form-control" placeholder="BID" required="required" style="margin-bottom:5px"  />

 <button class="btn btn-primary" name="submit" type="submit">Submit</button></form>
</div>
<h2 style="text-align:center">Book Requested</h2>

<?php
if(isset($_SESSION['login_user']))

{
	$sql= "SELECT registration.uname, SID, books.BID, Name , Author, Edtition, Status FROM registration inner join issue_book On registration.uname =issue_book.username inner join books On issue_book.BID = books.BID where issue_book.approve =''";
	$res= mysqli_query($db,$sql);
	if(mysqli_num_rows($res)==0)
	  {
		  echo "There's no pending request";
	  }
	  else
	  {
  echo "<table class='table table-bordered table-hover' style='width:100%; margin-:;'>";
		
		echo "<tr style =' background-color:#666666; color:black;'>";
		
			echo "<th>"; echo "Student Username"; echo "</th>";
			echo "<th>"; echo "Student ID"; echo "</th>";
			echo "<th>"; echo "Book ID"; echo "</th>";
			echo "<th>"; echo "Book Name"; echo "</th>";
			echo "<th>"; echo "Author"; echo "</th>";
			echo "<th>"; echo "Edition"; echo "</th>";
			echo "<th>"; echo "Status"; echo "</th>";
			
			echo "</tr>";
			
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td>"; echo $row['uname']; echo"</td>";
			echo "<td>"; echo $row['SID']; echo"</td>";
			echo "<td>"; echo $row['BID']; echo"</td>";
			echo "<td>"; echo $row['Name']; echo"</td>";
			echo "<td>"; echo $row['Author']; echo"</td>";
			echo "<td>"; echo $row['Edtition']; echo"</td>";
			echo "<td>"; echo $row['Status']; echo"</td>";
			echo "</tr>";
		
		}
		echo "</table>";
	  }
	  if(isset($_POST['submit']))
	  {
		  $_SESSION['uname']=$_POST['uname'];
		  $_SESSION['BID']=$_POST['BID'];
		  ?>
          <script type="text/javascript">
		   window.location="approve.php";
		  </script>
          <?php
	  }
  }

/*
  if(isset($_SESSION['login_user']))
  {
	  $q = mysqli_query($db, "SELECT * from issue_book where username='$_SESSION[login_user]';");
	  if(mysqli_num_rows($q)==0)
	  {
		  echo "There's no pending request";
	  }
	  else
	  {
  echo "<table class='table table-bordered table-hover' style='width:50%; margin-left:450px;'>";
		
		echo "<tr style =' background-color:#666666; color:black;'>";
		
			echo "<th>"; echo "ID"; echo "</th>";
			echo "<th>"; echo "Approve Status"; echo "</th>";
			echo "<th>"; echo "Issue Date"; echo "</th>";
			echo "<th>"; echo "Return Date"; echo "</th>";
			
			echo "</tr>";
		while($row=mysqli_fetch_assoc($q))
		{
			echo "<tr>";
			echo "<td>"; echo $row['BID']; echo"</td>";
			echo "<td>"; echo $row['Approve']; echo"</td>";
			echo "<td>"; echo $row['issue']; echo"</td>";
			echo "<td>"; echo $row['return']; echo"</td>";
			echo "</tr>";
		
		}
		echo "</table>";
	  }
  }
  */
?>
</div>

</body>
</html>