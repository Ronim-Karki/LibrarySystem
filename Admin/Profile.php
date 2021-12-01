<?php
	include "connection.php";
	include "nav sidebar.php";
	session_start()
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title>Profile</title>
    <style type="text/css">
	.wrapper
	{
		width: 500px;
		margin: 0 auto;
		background-color:#666;
		color:white;
	}
	</style>
    <link href="file:///C|/Users/User/OneDrive/Documents/Unnamed Site 3/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
 
       
		<div class="wrapper" >
         
    	<form action="" method="post">
        <button class="" style="float:right; width:70px; border:double; border-radius:curve; margin-left:-70px" name="submit1">Edit</button>
        </form>
        <?php
		if(isset($_POST['submit1']))
		{
			?>
            <script type="text/javascript">
				window.location="edit.php"
			</script>
            <?php
		}
		
		
		
			$q =mysqli_query($db,"SELECT First, Last, uname, psw, Email, Phone FROM admin where uname='$_SESSION[login_user]';");
		?>
        <h2 style="text-align:center">My profile</h2>
        <?php
			
			$row=mysqli_fetch_assoc($q);
			echo "<div style='text-align: center'><img class='img-circle profile-img' height=110 width=120 src='Image/".$_SESSION['Pic']."'> </div>";
		?>
        <div style="text-align:center;"<b>Welcome,</b><h4>
        <?php echo $_SESSION['login_user'];?>
        </h4>
        </div>
        <?php 

		
		echo "<b>";
		echo "<table class='table table-border' style='color:white'>";
		echo "<tr>";
			echo "<td>";
				echo "<b> First Name: </b>";
			echo "</td>";
				echo "<td>";
				echo $row['First'];
			echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td>";
				echo "<b> Last Name: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['Last'];
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<b> Username: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['uname'];
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<b> Password: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['psw'];
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<b> Email: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['Email'];
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<b> Phone: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['Phone'];
			echo "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</b>";
		?>
      </div>
        
</body>
</html>