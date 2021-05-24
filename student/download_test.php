<?php include("../connection.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>E-Notes</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/georgiai.js"></script>
<script type="text/javascript" src="../js/cuf_run.js"></script>
</head>
<body>
<form name="upld_note" method="post" enctype="multipart/form-data">
<!-- START PAGE SOURCE -->
<div class="main">
  <?php include("header.php"); ?>
  <div class="body">
    <div class="body_resize">
      <div class="left"> <img src="../images/img_1.jpg" alt="" width="84" height="90" />
        <h2>Downloads Notes <br />
        </h2>
      
        <div class="bg"></div> 
		<h3>List all Notes</h3>
        <table width="100%%" border="1" style="border-collapse: collapse; border:#000000;">
	  
       
		  <?php
		  $sql="select * from upld_test";
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_row($result))
		{
		$file = $row[2]; 		
		echo "<tr><td><a href=download.php?nama=$file>$row[1]</a></td></tr>";
		}

?>
		
      </table>
	 
        </h2>
        <div class="bg"></div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><a href="#"></a></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="FBG_resize"><img src="../images/fbg_img.gif" alt="" width="931" height="20" /></div>
  
  <?php include("footer.php"); ?>
</div>
<!-- END PAGE SOURCE --> 
 </form>
</body>
</html>
