<?php
include("connection.php");
if(isset($_REQUEST['login']))
{
$username = $_POST['email'];  
$password = $_POST['pass']; 
$usertype = $_POST['user_type'];

	if($usertype=="Student") 
	{ 
	 $sql = "select *from student where st_mail = '$username' and st_pswd = '$password'";  
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	//print_r($row);
	$count = mysqli_num_rows($result);  
		if($count == 1)
		{
				$_SESSION['student_id']=$row['st_Id '];
				header("Location:student/student_home.php");
		}
		else
		{  
			echo '<script>alert("Invalid User Id and Password for Student")</script>';
		}
	}
if($usertype=="Administrator") 
	{ 
	 $sql = "select *from admin where admin_email = '$username' and admin_pass = '$password'";  
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	//print_r($row);
	$count = mysqli_num_rows($result);  
		if($count == 1)
		{
				$_SESSION['admin_id']=$row['admin_id'];
				header("Location:admin/admin_home.php");
		}
		else
		{  
		echo '<script>alert("Invalid User Id and Password for Administrator")</script>';
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>E-Notes</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/georgiai.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script src="js/jquery.js" type="text/javascript"></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
   <?php include("header.php"); ?>
  <div class="body">
    <div class="body_resize">
      <div class="left">
        <h2>Login Form </h2>
        <p class="big bgline">&nbsp;</p>
        <form action="#" method="post" id="contactform">
          <ol>
           
            <li>
              <label for="email">E-Mail*</label>
              <input id="email" name="email" class="text" />
            </li>
            <li>
              <label for="company">Password*</label>
              <input type="password" name="pass" class="text" />
            </li>
			
              <br />
              <input type="radio"  name="user_type" value="Student"  />Student
			  <input type="radio"  name="user_type" value="Administrator"  />Administrator<br />
           <p align="center"><a href="reg.php">Click here for sign Up</a></p>
           
            <li class="buttons">
			 
              <input type="submit" name="login" id="imageField"  value="Login" class="send" />
              <div class="clr"></div>
            </li>
          </ol>
        </form>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="FBG_resize"><img src="images/fbg_img.gif" alt="" width="931" height="20" /></div>
  <div class="FBG">
    <div class="FBG_resize">
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
      <p class="rf">Design by <a href="http://www.hotwebsitetemplates.net">Hot Website Templates</a></p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
