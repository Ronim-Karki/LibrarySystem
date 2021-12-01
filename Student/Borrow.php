<?php
	include "connection.php";
	include "nav sidebar.php";
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Books</title>
    <style>
    .table {
        margin: 10px 0 0 10px;
        width: 80%;
        margin-left: 250px;
    }

    .table th {
        background-color: #666;
    }
    </style>
</head>

<body>
    <h2 style="text-align:center">List of books.</h2>

    <?php
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
			echo "<th>"; echo "Borrow"; echo "</th>";
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
			?>
    <form method='post' action='request.php'>
        <td><button name='Borrow' type='submit' value='Borrow' class='btn btn-primary'
                style="background-color:#090; color:#FFF">Borrow</button></td>
    </form>

    <?php
				
			echo "</tr>";
		
		}
		echo "</table>";
		
		/*
		if(isset($_POST['Borrow']))
		{
			if(isset($_SESSION['login_user']))
			{
				mysqli_query($db, "INSERT INTO issue_book Values('$_SESSION[login_user]','$_POST[BID]','','','');");
				?>
    <script type="text/javascript">
    alert("Book Requested");
    </script>
    <?
			}
			else
			{
				?>
    <script type="text/javascript">
    alert("cannot request not available");
    </script>
    <?php
			}
		}
		*/
		
		?>

</body>

</html>