<?php
	include "connection.php";
	include "nav sidebar1.php";
	session_start();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Status of Borrow</title>
</head>
<style>
.container{
	background-color:#999;
	padding-bottom:10px;
}
</style>


<body>
<div class="container">
<h3 style="text-align:center">Information of Borrowed Books.</h3>
<?php
$c=0;
	if(isset($_SESSION['login_user']))
	{
		$sql= "SELECT registration.uname, SID, books.BID, Name , Author, Edtition, issue, issue_book.return FROM registration inner join issue_book On registration.uname =issue_book.username inner join books On issue_book.BID = books.BID where issue_book.Approve ='Yes' order by issue_book.return ASC";
		
		 
		 $res = mysqli_query($db, $sql);
		 
		
		
		 
		 echo "<table class='table table-bordered table-hover' style='width:100%; margin-:;'>";		
		echo "<tr style =' background-color:#666666; color:black;'>";
		
			echo "<th>"; echo "Student Username"; echo "</th>";
			echo "<th>"; echo "Student ID"; echo "</th>";
			echo "<th>"; echo "Book ID"; echo "</th>";
			echo "<th>"; echo "Book Name"; echo "</th>";
			echo "<th>"; echo "Author"; echo "</th>";
			echo "<th>"; echo "Edition"; echo "</th>";
			echo "<th>"; echo "Issue"; echo "</th>";
			echo "<th>"; echo "Return"; echo "</th>";
			echo "</tr>";
			
		while($row=mysqli_fetch_assoc($res))
		{
			$d=date("Y-m-d");
			if($d > $row['return'])
			{
				$c=$c+1;
				$var='<p style="color:yellow; background-color:red;">Expired</p>';
				mysqli_query($db, "UPDATE issue_book SET Approve='$var' where `return`='$row[return]' and Approve='Yes' limit $c;");
			} 

			echo $d;

			
			echo "<tr>";
			echo "<td>"; echo $row['uname']; echo"</td>";
			echo "<td>"; echo $row['SID']; echo"</td>";
			echo "<td>"; echo $row['BID']; echo"</td>";
			echo "<td>"; echo $row['Name']; echo"</td>";
			echo "<td>"; echo $row['Author']; echo"</td>";
			echo "<td>"; echo $row['Edtition']; echo"</td>";
			echo "<td>"; echo $row['issue']; echo"</td>";
			echo "<td>"; echo $row['return']; echo"</td>";
			echo "</tr>";
		
		}
		echo "</table>";
	}
?>
<a href="expired.php" style="text-align:right; background-color:red; width:50%;color:black;" >Expired Details</a>
</div>
</body>
</html>