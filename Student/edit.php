<?php
	include "connection.php";
	include "nav sidebar1.php";
	session_start()
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit profile</title>
<style type="text/css">
.form-control
{
	width:250px
	height: 38px;
}
form
{
	padding-left:400px;
	padding-right:400px;
}
</style>
</head>

<body style="background-color:#FFF;">
<h2 style="text-align:center; color:black;">Edit Profile.</h2>
<?php
	$sql = "SELECT * from registration where uname='$_SESSION[login_user]'";
	$result = mysqli_query($db, $sql) or die (mysql_error());
	while ($row = mysqli_fetch_assoc($result))
	{
		$First=$row['First'];
		$middle=$row['middle'];
		$Last=$row['Last'];
		$DOB=$row['DOB'];
		$Street=$row['inputStreet'];
		$City=$row['inputCity'];
		$state=$row['inputState'];
		$zip=$row['inputZip'];
		$country=$row['inputCounty'];
		$uname=$row['uname'];
		$psw=$row['psw'];
		$SID=$row['SID'];
		$Email=$row['Email'];
		$Phone=$row['Phone'];
		
	}
?>
<div class="profile_info" style="text-align:center;">
	<span style="color:Black;">Welcome,</span>
    <h4 style="color:black"> <?php echo $_SESSION['login_user'];?></h4>
    </div><br />
<br />
<form action="" method="post" enctype="multipart/form-data">
<input class="form-control" type="file" name="file" /><br />

<input class="form-control" type="text" name="First" placeholder="First name" required="required"/ value="<?php echo $First?>"></br>
        <input class="form-control" type="text" name="middle" placeholder="Middle name" value="<?php echo $middle?>"/></br>
        <input class="form-control" type="text" name="Last" placeholder="Last name" required="optional" value="<?php echo $Last?>"/></br>
        <label for="DOB"><b class="container">Date of Birth:</b></label>
        <input class="form-control" type="date" name="DOB" placeholder="Date of birth" required="required" value="<?php echo $DOB?>"/></br></br>
  <div class="location"> 
<label for="Address"><b class="location">Address:</b></label> </br>

  <input class="form-control" type="Street" class="location" id="inputStreet" placeholder="Street" value="<?php echo $Street?>">
         </br>
  
  <input class="form-control" type="city" 
         class="location" 
         id="inputCity" 
         placeholder="City" required="required" value="<?php echo $City?>">
         </br>
  
  <input class="form-control" type="state" 
         class="location" 
         id="inputState" 
         placeholder="State" required="required" value="<?php echo $state?>"><br />

  
  <input class="form-control" class="form-control" type="zip" 
         class="location" 
         id="inputZip" 
         placeholder="Zip" required="required" value="<?php echo $zip?>"><br />

  
  <input class="form-control" type="county" 
         class="location" 
         id="inputCounty" 
         placeholder="County" required="required" value="<?php echo $country?>"><br />

         </div>
  
   <label for="uname"><b class="container">Username:</b></label>
    	
        <input class="form-control" type="text" placeholder=" Username" name="uname" required="required" value="<?php echo $uname?>"/><br />
      <label for="psw"><b class="container">Password:</b></label>
        <input class="form-control" type="password" placeholder="create password" name="psw" required  value="<?php echo $psw?>"/><br />
        
       	<input class="form-control" type="text" placeholder="StudentID" name="SID" required value="<?php echo $SID?>"/><br />
        <input class="form-control" type="text" placeholder="Email" name="Email" required  value="<?php echo $Email?>"/><br />
        <input class="form-control" type="text" placeholder="Phone" name="Phone" required value="<?php echo $Phone?>"/><br />
       <div style="margin-left:400px;"> <button style=" width:100%; " class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" type="submit" name="submit" >Save</button></div>
</form>
</div>
<?php
	if(isset($_POST['submit']))
	{
		move_uploaded_file($_FILES['file']['temp_name'],"Image/".$_FILES['file']['name']);
		$First=$_POST['First'];
		$middle=$_POST['middle'];
		$Last=$_POST['Last'];
		$DOB=$_POST['DOB'];
		$Street=$_POST['inputStreet'];
		$City=$_POST['inputCity'];
		$state=$_POST['inputState'];
		$zip=$_POST['inputZip'];
		$country=$_POST['inputCounty'];
		$uname=$_POST['uname'];
		$psw=$_POST['psw'];
		$SID=$_POST['SID'];
		$Email=$_POST['Email'];
		$Phone=$_POST['Phone'];
		$pic=$_FILES['file']['name'];
		
		$sql1="UPDATE registration SET First='$First', middle='$middle', Last='$Last', DOB='$DOB', inputStreet='$Street', inputCity='$City', inputZip='$zip', inputCounty='$country' , uname='$uname', psw='$psw', SID='$SID', Email='$Email', Phone='$Phone', pic='$pic' WHERE uname='".$_SESSION['login_user']
		."';";
		if(mysqli_query($db,$sql1))
		{
			?>
            	<script type="text/javascript">
					alert("Saved successfully.");
					window.location="profile.php";
				</script>
            <?php
		}
	}
?>
</body>
</html>