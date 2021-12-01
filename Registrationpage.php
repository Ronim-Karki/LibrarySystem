
<?php
	include "connection.php";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

    <header>
    
    <nav>
    
    	<ul>
  			<li><a href="index.php">Home</a></li>
  			<li><a href="Memberlogin.php">MemberLogin</a></li>
            <li><a href="AdminLogin.php">adminLogin</a></li>
            <li><a href="Registrationpage.php">Register</a></li>
  			<li><a href="contact1.php">Contact</a></li>
  			<li><a href="About.php">About</a></li>
		</ul>
    </nav>
    </header>
 

<body background="Image/Registration image.jpg">
<div class="box2">
    <div calss="container">
    <h3>Registration Form</h3>
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
  <footer>
   	<ul>
    	<li> library@aih.gmail.com</li>
        <li>Phone:+61290208050</li>
        <li>L3 & 4, 545 Kent Street Sydney, NSW 2000</li>
        </ul>
        
   </footer>
</html>
