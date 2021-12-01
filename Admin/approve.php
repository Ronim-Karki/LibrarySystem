<?php
include "connection.php";
include "nav sidebar1.php";
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Approve Request</title>
</head>
<style>
.container{
	background-color:#999;
	padding-bottom:10px;
}
</style>

<body>

<div class="container">
<h3 style="text-align:center">Approve Request</h3>
<form class="Approve" action="" method="post">
<input class= "form-control" type="text" name="approve" placeholder="Approve or not" required="required" /><br />
<input  class= "form-control" type="text" name="issue" placeholder="Issue Date yyyy-mm-dd" required="required" /><br />
<input  class= "form-control" type="text" name="return" placeholder="Return Date yyyy-mm-dd" required="required" /><br />
<button class="btn btn-primary" type="submit" name="submit">Approve</button>
</form>
</div>
<?php
 if(isset($_POST['submit']))
 {
	 if(isset($_SESSION['login_user']))
	 {
	 mysqli_query($db, "UPDATE `issue_book` SET `Approve`='$_POST[approve]',`issue`='$_POST[issue]',`return`='$_POST[return]' WHERE username='$_SESSION[uname]' and BID='$_SESSION[BID]';");
	 mysqli_query($db, "UPDATE books SET Quantity = Quantity-1 WHERE BID='$_SESSION[BID]';");
	 $res=mysqli_query($db, "SELECT Quantity form books WHERE BID='$_SESSION[BID]';");
	 while($row=mysqli_fetch_assoc($res))
	 {
		 if($row['Quantity']==0)
		 {
			 mysqli_query($db,"UPDATE books SET Status='not-available' WHEREBID='$_SESSION[BID]';");
		 }
	 }
	 ?>
     <script type="text/javascript">
	 alert("Updated sucessfully.");
	 window.location="Bookrequest.php";
	 </script>
     <?php
 }
 }
?>

</body>
</html>