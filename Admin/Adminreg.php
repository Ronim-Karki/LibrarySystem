
<?php
	include "connection.php";
	include "nav sidebar1.php";
	session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

    
 

<body >
<div class="box2" >
    <div calss="container">
    <h3> Admin Registration Form</h3><br />
<br />
<br />
<br />

    <form name="Registraion" action="" method="post">
    	<input type="text" name="First" placeholder="First name" required="required"/></br>
        
        <input type="text" name="Last" placeholder="Last name" required="optional"/></br>
        <label for="DOB"><b class="container">Date of Birth:</b></label>
        <input type="date" name="DOB" placeholder="Date of birth" required="required" /></br></br>
  

  
    	
        <input type="text" placeholder=" Username" name="uname" required="required" /><br />
     
        <input type="password" placeholder="create password" name="psw" required /><br />
        
       
        <input type="text" placeholder="Email" name="Email" required /><br />
        <input type="text" placeholder="Phone" name="Phone" required /><br />
        <button type = "submit" name="submit">Create</button><br />
      
  		 
  		</div>
        
   <?php
   		if(isset($_POST['submit']))
		{
			$count=0;
			$sql="SELECT uname FROM admin";
			$res=mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res))
			{
				if($row['uname']==$_POST['uname'])
				{
					$count=$count+1;
				}
			}
		
			if($count==0)
				{ mysqli_query($db,"INSERT INTO `admin` VALUES('$_POST[First]','$_POST[Last]','$_POST[uname]','$_POST[psw]','$_POST[Email]','$_POST[Phone]', '$_POST[DOB]', 'p.png');");
	
		 
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
