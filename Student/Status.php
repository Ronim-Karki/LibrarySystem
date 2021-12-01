<?php
 include "connection.php";
 include "nav sidebar1.php";
 session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Status</title>
</head>

<body>
<h2 style="text-align:center;">Book Requested</h2>
<?php
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
?>
</body>
</html>