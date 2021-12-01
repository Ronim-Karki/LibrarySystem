<?php
	include "connection.php";
	include "nav sidebar.php";
	session_start()
?>
<!DOCTYPE html>
<html>
<head>

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
</head>
<body>
	<div class="container">
    	
		<div class="wrapper" >
          
    	<form action="" method="post">
        <button class="" style="float:right; width:70px; border:double; border-radius:curve; margin-left:-70px" name="submit1" type="submit">Edit</button>
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
			$q="SELECT First, Last, uname,  Email, Phone, SID FROM registration where uname='$_SESSION[login_user]';";
			$result=mysqli_query($db, $q);
			
		?>
        <h2 style="text-align:center";>My profile</h2>
        <?php
			$row = mysqli_fetch_assoc($result);
			
			
			echo "<div style='text-align: center'><img class='img-circle profile-img' height=110 width=120 src='Image/".$_SESSION['pic']."'> </div>";
		?>
        <div style="text-align:center;"<b>Welcome,</b><h4>
        <?php echo $_SESSION['login_user'];?>
        </h4>
        </div>
        <?php 
		echo "<b>";
		echo "<table class='table table-border ' style='color:white'>";
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
		/*
		echo "<tr>";
			echo "<td>";
				echo "<b> Password: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['psw'];
			echo "</td>";
		echo "</tr>";
		*/
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
		 "<tr>";
			echo "<td>";
				echo "<b> Student ID: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['SID'];
			echo "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</b>";
		
		
		?>
      </div>
        
</body>
</html>