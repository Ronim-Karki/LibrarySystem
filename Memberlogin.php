<?Php
	include "connection.php";
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MemberLogin</title>

<link rel="stylesheet" type="text/css" href="style.css" />

    
 
</head>

<nav>


    	<ul>
  			<li><a href="index.php">Home</a></li>
  			<li><a href="Memberlogin.php">MemberLogin</a></li>
            <li><a href="AdminLogin.php">adminLogin</a></li>
            <li><a href="Registrationpage.php">Register</a></li>
  			<li><a href="contact1.php">Contact</a></li>
  			<li><a href="About.php">About</a></li>
    </nav>
  

<body background="Image/Library1.png">

<form name="login" action="" method="post">

<div class="box1">
    <div calss="container">
    <h3>Member login</h3>
    	<label for="uname"><b class="container">Username</b></label><br />
        <input type="text" placeholder=" Enter Username" name="uname" required="required" /><br /><br />
        <label for ="psw"><b class="container">Password</b></label><br />
        <input type="password" placeholder="Enter password" name="psw" required /><br />
       
        <button type = "submit" name="submit">Login</button><br />
        <input type="checkbox" checked ="checked" name="remember" />Remember me</label><br /> </br>
        <span class="psw" align="left" style="margin-left:14px">Forget <a href="Forget.php">Password?</a></span>
        <button type="button" class="cancelbtn">Cancel</button>
        <p align="center" style="margin-left:-20px"><a href="Registrationpage.php">Create account</a></p>
        <p align="center" style="margin-left:-20px"><a href="AdminLogin.php">admin login</a></p>
 </form>
  </div>  
  </div>

 <?php
 	if(isset($_POST['submit']))
	{
		$count=0;
		$res=mysqli_query($db,"SELECT * FROM registration where uname='$_POST[uname]' && psw='$_POST[psw]';");
		$row=mysqli_fetch_assoc($res);
		$count=mysqli_num_rows($res);
		
		if($count==0)
		{
			?>
            	<script type="text/javascript">
				alert("Username and Password donot match.");
				</script>
                <?php
		}
		else
		{
			$_SESSION['login_user'] = $_POST['uname'];
			$_SESSION['pic']=$row['pic'];
			?>
            <script type="text/javascript">
				window.location="Student/membelogddddin.php"
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
