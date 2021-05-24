<?php include("../connection.php");
if(isset($_REQUEST['save']))
{
	 $filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.doc','.docx','.pdf');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000))
	{	
		// Rename file
		$get_file= substr(md5($file_basename), 0, 5);
		$newfilename = ($get_file) . $file_ext;
		if (file_exists("../upload/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $newfilename);
			//echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 2000000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
$crr_date=date('m/d/Y');
	 $sql="insert into upld_test (test_title,test_file_name,upld_date)values
	(
		'".$_REQUEST['title']."',
		'". $newfilename."',
		'". $crr_date."'
	)";
$result=mysqli_query($con,$sql);
header("Location:thank_you.php?msg=Thank you, $_REQUEST[name]'s Record Has been Added Sucessfully");
}
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
        <h2>Upload Test <br />
        </h2>
      
        <div class="bg"></div>  <br /> <br />
		
        <table width="100%%" border="1" style="border-collapse: collapse; border:#000000;">
	  
        <tr>
          <td><div align="center" class="style8"><span class="style3">Test Subject/Title </span></div></td>
          <td><div align="center" class="style8"><span class="style3"><input type="text" name="title" /></span></div></td>
        </tr>
		 <tr>
          <td><div align="center" class="style8"><span class="style3">Upload Test </span></div></td>
          <td><div align="center" class="style8"><span class="style3"><input type="file" name="file"  /></span></div></td>
        </tr>
		<tr>
         
          <td colspan="2"><div align="center" class="style8"><span class="style3"><input type="submit" name="save" value="Upload" /></span></div></td>
        </tr>
      </table>
	 
        </h2>
        <div class="bg"></div>
        <p><img src="../images/img_3.jpg" alt="" width="156" height="156" class="floated" />        </p>
        <p>&nbsp;</p>
        <p><a href="#"></a></p>
      </div>
      <div class="right">
        <h3> Menu</h3>
        <div class="bg"></div>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Upload Notes</a></li>
          <li><a href="#">Download Notes </a></li>
		  <li><a href="#">Test</a></li>
        </ul>
        <p>&nbsp;</p>
        <h3>&nbsp;</h3>
        <div class="bg"></div>
        <ul class="sponsors">
          <li class="sponsors">Calendar</li>
        </ul>
        <div class="bg"></div>
        <div class="widget_calendar">
          <ul>
            <li>
              <table>
                <caption>
                May 2021
                </caption>
                <tbody>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                    <td><a href="#">1</a></td>
                    <td><a href="#">2</a></td>
                    <td><a href="#">3</a></td>
                    <td><a href="#">4</a></td>
                    <td><a href="#">5</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">6</a></td>
                    <td><a href="#">7</a></td>
                    <td><a href="#">8</a></td>
                    <td><a href="#">9</a></td>
                    <td><a href="#">10</a></td>
                    <td><a href="#">11</a></td>
                    <td><a href="#">12</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">13</a></td>
                    <td><a href="#">14</a></td>
                    <td><a href="#">15</a></td>
                    <td><a href="#">16</a></td>
                    <td><a href="#">17</a></td>
                    <td><a href="#">18</a></td>
                    <td><a href="#">19</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">20</a></td>
                    <td><a href="#">21</a></td>
                    <td><a href="#">22</a></td>
                    <td><a href="#">23</a></td>
                    <td><a href="#">24</a></td>
                    <td><a href="#">25</a></td>
                    <td><a href="#">26</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">27</a></td>
                    <td><a href="#">28</a></td>
                    <td><a href="#">29</a></td>
                    <td><a href="#">30</a></td>
                    
                    <td>&nbsp;</td>
                  </tr>
                </tbody>
              </table>
            </li>
          </ul>
        </div>
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
