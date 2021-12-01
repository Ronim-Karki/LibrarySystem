<?php
	include "nav sidebar1.php";
	include "connection.php";
	session_start();
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<style type="text/css">
 	body
	 {
		 background-image:url(Image/feedback-concept-feedback-concept-business-man-looking-drawn-sketch-icons-114394189.jpg);
	background-size:cover;
	}
	.wrapper
	{
		padding:10px;
		margin:20px auto;
		width:900px;
		height:600px;
		background-color:#333;
		opacity:0.9;
		color:white;
		text-align:center;

	}
	.form-control
	{
		height: 120px;
		width: 80%;
		text-align:center;
		margin-left:10%;
		color:white;
	}
	.Scroll
	{
		height:350px;
		width:: 100%;
		overflow:auto;
		text-color:#FFF;
	}
	.table
	{
		color:white;
		text-align:center;
	}
	</style>

</head>

<body>
	<div class="wrapper">
		<h4> If you have any suggestions or question You can write below.</h4>
        <form style= "" action="" method="post" style="color:white;">
        	<input class="form-control" type ="text" name="comment" placeholder="Write here........" >
            <input class="" type ="submit" name="submit" value="Comment" > 
            </form>
        <br /><br />


        
        <div class="Scroll">
        <?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('','$_SESSION[login_user]','$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{ 
					$q= "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);
					echo "<table class='table table-borderless' >";
					while ($row=mysqli_fetch_assoc($res))
					{
						echo "<tr>";
						echo "<td>"; echo $row['username']; echo "</td>";
						echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
					
				}
			}
			else
			{
				$q= "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);
					echo "<table class='table table-borderless' >";
					while ($row=mysqli_fetch_assoc($res))
					{
						echo "<tr>";
						echo "<td>"; echo $row['username']; echo "</td>";
						echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				
			}
		?>
        </div>
        </div>
</body>
</html>