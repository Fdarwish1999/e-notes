<?php include("../connection.php");
if(isset($_REQUEST['send']))
{
	 echo $sql="insert into contact_to_teacher (name,email,msg)values
	(
		'".$_REQUEST['name']."',
		'". $_REQUEST['email']."',
		'". $_REQUEST['msg']."'
	)";
$result=mysqli_query($con,$sql);
header("Location:thank_you_add_teacher.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>E-Notes</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
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
        <h2>Contact to Teacher </h2>
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
      <div class="right">
        <h3><span>How to Contact Teacher </span></h3>
        <p>To access the notes from your organization's administrator, click Contact administrator for the relevant organization. You can also access the option by clicking Get Help from any page.

The Contact Teacher dialog box displays the notes from your organization's Teacher. </p><p>&nbsp;</p>
       
        <div class="bg"></div>
        <div class="widget_calendar">
          <ul>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="FBG_resize"></div>
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
