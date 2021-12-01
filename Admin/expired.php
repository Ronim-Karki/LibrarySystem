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
<h3 style="text-align:center">Expired books.</h3>

<?php
if(isset($_SESSION['login_user']))
	{
		?>
        <div style="float:right; padding:15px; padding-bottom:15px;">&nbsp
        <form method="post" action="">
        <button name="submit2" type="submit" class="bt btn-primary" style="margin-bottom:15px">RETURNED</button>
<button name="submit3" type="submit" class="bt btn-primary">EXPIRED</button>
</form>
        <div class="srch" >
        
<form method="post" action="" name="form1" >
 <input type="text" name="uname" class="form-control" placeholder="Username" required="required" style="margin-bottom:5px;" />

 <input type="text" name="BID" class="form-control" placeholder="BID" required="required" style="margin-bottom:5px"  />

 <button class="btn btn-primary" name="submit" type="submit">Submit</button></form>
</div>
</div>



<?php
if(isset($_POST['submit']))
{
	$var1='<p style="color:yellow; background-color:green;">Returned</p>';
	mysqli_query($db, "UPDATE issue_book SET Approve='$var1' where username='$_POST[uname]' and BID='$_POST[BID]'");
			} 
	
}




$c=0;
	if(isset($_SESSION['login_user']))
	{
		$ret='<p style="color:yellow; background-color:green;">Returned</p>';
		$exp='<p style="color:yellow; background-color:red;">Expired</p>';
		$sql= "SELECT registration.uname, SID, books.BID, Name , Author, Edtition,Approve, issue,  issue_book.return FROM registration inner join issue_book On registration.uname =issue_book.username inner join books On issue_book.BID = books.BID where issue_book.Approve !=''  and issue_book.Approve !='Yes' order by issue_book.return DESC";
		
		if(isset($_POST['submit2']))
		{
			$sql= "SELECT registration.uname, SID, books.BID, Name , Author, Edtition,Approve, issue,  issue_book.return FROM registration inner join issue_book On registration.uname =issue_book.username inner join books On issue_book.BID = books.BID where issue_book.Approve ='$ret'  and issue_book.Approve !='Yes' order by issue_book.return DESC";
		}
		else if(isset($_POST['submit3']))
		{
			$sql= "SELECT registration.uname, SID, books.BID, Name , Author, Edtition,Approve, issue,  issue_book.return FROM registration inner join issue_book On registration.uname =issue_book.username inner join books On issue_book.BID = books.BID where issue_book.Approve ='$exp'  and issue_book.Approve !='Yes' order by issue_book.return DESC";
		}
		else
		{
			$sql= "SELECT registration.uname, SID, books.BID, Name , Author, Edtition,Approve, issue,  issue_book.return FROM registration inner join issue_book On registration.uname =issue_book.username inner join books On issue_book.BID = books.BID where issue_book.Approve !=''  and issue_book.Approve !='Yes' order by issue_book.return DESC";
			
		}
		 $res = mysqli_query($db, $sql);
		 
		
		 
		 echo "<table class='table table-bordered table-hover' style='width:100%; margin-:;'>";		
		echo "<tr style =' background-color:#666666; color:black;'>";
		
			echo "<th>"; echo "Student Username"; echo "</th>";
			echo "<th>"; echo "Student ID"; echo "</th>";
			echo "<th>"; echo "Book ID"; echo "</th>";
			echo "<th>"; echo "Book Name"; echo "</th>";
			echo "<th>"; echo "Author"; echo "</th>";
			echo "<th>"; echo "Edition"; echo "</th>";
			echo "<th>"; echo "Status"; echo "</th>";
			echo "<th>"; echo "Issue"; echo "</th>";
			echo "<th>"; echo "Return"; echo "</th>";
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
			echo "<td>"; echo $row['Approve']; echo"</td>";
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