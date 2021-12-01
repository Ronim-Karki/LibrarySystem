
<?php
	include "connection.php";
	include "nav sidebar1.php";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<style>
.box2
	{
	height: 1200px;
	width: 600px;
	background-color:#9FC;
	margin: 70px auto;
	opacity:.9;
	float:center;
	text-aligh:center;
	}
</style>
    
 

<body background="Image/hero_books_2019 (1).png">
<div class="box2" >
    <div calss="container" style="height:100px;">
    <h3>Registration Form</h3><br />
<br />

    <form name="Registraion" action="" method="post">
    	<input type="text" name="First" placeholder="First name" required="required"/></br>
        <input type="text" name="middle" placeholder="Middle name" /></br>
        <input type="text" name="Last" placeholder="Last name" required="optional"/></br>
        <label for="DOB"><b class="container">Date of Birth:</b></label>
        <input type="date" name="DOB" placeholder="Date of birth" required="required" /></br></br>
  <div class="location"> 
<label for="Address"><b class="location">Address:</b></label> </br>

  <input type="Street" class="location" id="inputStreet" placeholder="Street">
         </br>
  
  <input type="city" 
         class="location" 
         id="inputCity" 
         placeholder="City" required="required">
         </br>
  
  <input type="state" 
         class="location" 
         id="inputState" 
         placeholder="State" required="required">
  
  <input type="zip" 
         class="location" 
         id="inputZip" 
         placeholder="Zip" required="required">
  
  <input type="county" 
         class="location" 
         id="inputCounty" 
         placeholder="County" required="required">
         </div>
  
  
    	
        <input type="text" placeholder=" Username" name="uname" required="required" /><br />
     
        <input type="password" placeholder="create password" name="psw" required /><br />
        
       	<input type="text" placeholder="StudentID" name="SID" required /><br />
        <input type="text" placeholder="Email" name="Email" required /><br />
        <input type="text" placeholder="Phone" name="Phone" required /><br />
        <button type = "submit" name="submit">Create</button><br />
      
  		</div>  
  		</div>
        
   <?php
   		if(isset($_POST['submit']))
		{
			$count=0;
			$sql="SELECT uname FROM registration";
			$res=mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res))
			{
				if($row['uname']==$_POST['uname'])
				{
					$count=$count+1;
				}
			}
		
			if($count==0)
				{ mysqli_query($db,"INSERT INTO `REGISTRATION` VALUES('$_POST[First]','$_POST[middle]','$_POST[Last]','$_POST[DOB]','$_POST[inputStreet]','$_POST[inputCity]','$_POST[inputState]','$_POST[inputZip]','$_POST[inputCountry]','$_POST[uname]','$_POST[psw]','$_POST[SID]','$_POST[Email]','$_POST[Phone]', 'p.png');");
	
		 
   ?>
   <script type="text/javascript">
   		alert("Registration Successful.");
   </script>
   <?php
	}
		
		else
			{
				?>
                <script type="text/javascript">
   					alert("Username already exist.");
				</script>
            <?php
			
			}
		}
			
			?>

</body>
  
</html>
