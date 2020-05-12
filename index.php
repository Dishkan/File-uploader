<?php
// print_r($_FILES); массив в котором находятся файлы которы  мы отправляли на сервер, встроенная функция php
     require_once "lib/upload_class.php";
	 
     if($_POST["upload"]) {
	    $upload_text = UploadText::uploadFile($_FILES["text"]);
		$upload_image = UploadImage::uploadFile($_FILES["image"]);
		$upload_music = UploadMusic::uploadFile($_FILES["music"]);
		$upload_video = UploadVideo::uploadFile($_FILES["video"]);
		$success_text = $upload_text;
		$success_image = $upload_image;
		$success_music = $upload_music;
		$success_video = $upload_video;
	 }
?>

<html>
<head>
       <title>Downloader of files</title>
</head>
<body>
      <h1>Downloader of files from Dishkan!</h1>
	  <?php
	        if ($_POST["upload"]) {
			    if ($success_text == true) echo "Text file uploaded successfully<br />";
				else echo "Error loading text file<br />";
			    if ($success_image == true) echo "Image uploaded successfully<br />";
				else echo "Error loading image<br />";	
                if ($success_music == true) echo "Audio uploaded successfully<br />";
				else echo "Error loading audio<br />";	
                if ($success_video == true) echo "Video uploaded successfully<br />";
				else echo "Error loading video<br />";				
			}				
	  ?>
	  <form name="myform" action="index.php" method="post" enctype="multipart/form-data">
	    <table>
		     <tr>
			   <td>Image:</td>
			   <td>
			       <input type="file" name="image" />
			   </td>
			 </tr>
		     <tr>
			   <td>Text:</td>
			   <td>
			       <input type="file" name="text" />
			   </td>
			 </tr>	
		     <tr>
			   <td>Music:</td>
			   <td>
			       <input type="file" name="music" />
			   </td>
			 </tr>	
		     <tr>
			   <td>Video:</td>
			   <td>
			       <input type="file" name="video" />
			   </td>
			 </tr>
			 <tr>
			 <td colspan="2">
			    <input type="submit" name="upload" value="Download files" />
			 </td>
			 </tr>
		</table>
	  </form>
</body>
<html>