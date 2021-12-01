	<?php
	include "connection.php";
	
	?>
	<!DOCTYPE html>
	<html>

	<head>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
	        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	    <title>Books</title>
	    <style>
	    .body {
	        backgorund: #f2f2f2;
	    }


	    .table {
	        margin-top: 10px;
	        margin-buttom: 10px;
	        margin-left: 250px;
	        margin-right: 100px;
	        float: none;




	    }


	    .table th {
	        background-color: #666;
	    }
	    </style>
	</head>

	<body background: bgcolor="#f2f2f2">
	    <div class="book">

	        <?php
	 include "nav sidebar.php";
	 ?>
	        <h2 style="text-align:center">List of books.</h2>
	        <form action="" method="post">
	            <a href="addbook.php"><button type="button"
	                    class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button"
	                    style="margin-left: 250px; margin-bottom: 5px; width:150px; "><span
	                        class="glyphicon glyphicon-plus-sign"></span> +Add Book</button></a>
	        </form>
	        <?php
		$res=mysqli_query($db, "SELECT * FROM `books`;");
		echo "<table class='table table-bordered table-hover' style='width:80%'>";
		
		echo "<tr style ='background-color:white;'>";
		
			echo "<th>"; echo "ID"; echo "</th>";
			echo "<th>"; echo "Name"; echo "</th>";
			echo "<th>"; echo "Auther"; echo "</th>";
			echo "<th>"; echo "Edition"; echo "</th>";
			echo "<th>"; echo "Status"; echo "</th>";
			echo "<th>"; echo "Quantity"; echo "</th>";
			echo "<th>"; echo "Department"; echo "</th>";
			echo "<th>"; echo "Delete"; echo "</th>";
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
	        <div class="delete">
	            <form method="post" id="delete" action="">
	                <td><input type="hidden" value="" name="ID">
	                    <button name="del" type="submit" value="" class="btn btn-danger"
	                        style=" color:#FFF">DELETE</button>
	                </td>
	            </form>
	        </div>

	        <?php
			echo "</tr>";
		}
		echo "</table>";
		
		if(isset($_POST['del']))
			
		{
			$sql=mysqli_query($db, "DELETE FROM `message` WHERE id = $id");
			if($sql)
			{
				echo "Deleted.";
			}
		}
	?>



	</body>

	</html>