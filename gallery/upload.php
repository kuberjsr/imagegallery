<?php
 //define ("filesplace","./");
//
// if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {
//
// if ($_FILES['classnotes']['type'] != "application/pdf") {
// echo "<p>Class notes must be uploaded in PDF format.</p>";
// } else {
// $name = $_POST['name'];
// $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], filesplace."/$name.pdf");
// if ($result == 1) echo "<p>Upload done .</p>";
// else echo "<p>Sorry, Error happened while uploading . </p>";
//} #endIF
// } #endIF
if(isset($_POST['submit']))
{
$target_path = "img/";
$dt=date("dmy");

$target_path = $target_path .$dt. basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "Successfully Upload";
} else{
    echo "There was an error uploading the file, please try again!";
}
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload images</title>
</head>

<body>

<form action="" enctype="multipart/form-data" method="post">
 <input type="file" name="uploadedfile" value="" /><br />
  <input type="submit" name="submit" value="Upload Images" />
</form>


</html>
