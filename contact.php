<?php include("connection.php");
if(isset($_REQUEST['send']))
{
	  $sql="insert into contact_to_teacher (name,email,msg)values
	(
		'".$_REQUEST['name']."',
		'". $_REQUEST['email']."',
		'". $_REQUEST['msg']."'
	)";
$result=mysqli_query($con,$sql);
header("Location:thank_you.php");
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
        <h2>Contact Us</h2>
        <p class="big bgline">By connecting students all over the world to the best teachers, we are helping individuals reach their goals and pursue their dreams.</p>
        <form action="#" method="post" id="contactform">
          <ol>
            <li>
              <label for="name">Your Name*</label>
              <input id="name" name="name" class="text" />
            </li>
            <li>
              <label for="email">E-Mail*</label>
              <input id="email" name="email" class="text" />
            </li>
            <li>
              <label for="message">Your Message*</label>
              <textarea id="msg" name="msg" rows="6" cols="50"></textarea>
            </li>
            <li class="buttons">
              <input type="submit" name="send" id="send"  value="Send message" class="send" />
              <div class="clr"></div>
            </li>
          </ol>
        </form>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="FBG_resize"><img src="images/fbg_img.gif" alt="" width="931" height="20" /></div>
  
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
