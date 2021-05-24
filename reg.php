<?php
include("connection.php");
if(isset($_REQUEST['reg']))
{
//st_Id	st_name,st_contact,st_mail,st_pswd,st_uname,st_add,st_lvl	
 $sql = "insert into student(st_name,st_contact,st_mail,st_pswd,st_uname,st_add)values(
'".$_REQUEST['fname']."',
'".$_REQUEST['cont']."',
'".$_REQUEST['email']."',
'".$_REQUEST['pass']."',
'".$_REQUEST['uname']."',
'".$_REQUEST['add']."'
)";  
$result = mysqli_query($con, $sql); 
header("Location:login.php"); 

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
        <h2>Registration Form </h2>
        <form action="#" method="post" id="contactform">
          
                           <div class="body">
								<div class="body_resize">
								  <div class="left">
								 <ol>
								 <li>
                                    <input type="text" name="fname" placeholder="First Name" class="text" required="#" />
								   </li>
									<li>
                                    <input type="email" name="email" placeholder="Email" class="text" required="#" />
									</li>
									<li>
                                     <input type="password" name="pass" placeholder="Password" class="text" required="#" />
								   </li>
									<li>
								 <input type="text" name="uname" placeholder="User Name" class="text" required="#" />
								 </li>
									<li>
                                    <input type="text" name="cont" placeholder="Contact Number" class="text" required="#" />
									</li>
									<li>
                                    <textarea name="add" class="text" placeholder="Address" required="#"></textarea>
									</li><li>
									<div class="center">
                                      <input type="submit" name="reg" value="Sign-Up" class="btn-success">
                                    </div></li>
                                </ol>
                                
                             
                                  
                                 </div>
                              </div>
                           </div>
                       
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
