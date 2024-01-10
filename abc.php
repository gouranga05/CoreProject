<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$target_dir = "uploads/";  //basename($_FILES["fileToUpload"]["name"])
$imgdate=date('dmY_his').substr($_REQUEST['photo'],-4);
$target_file = $target_dir.$imgdate;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imgdate=$imgdate.".".$imageFileType;
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename($imgdate)). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
    // $a = "The first name is ".$_REQUEST['firstname'];
    // print $a."<br>";
    // print "The last name is ".$_REQUEST['lastname']."<br>";
    // print "The email is ".$_REQUEST['email']."<br>" ;
    
    // print "The password name is ".md5($_REQUEST['password'])."<br>";
    // print $_REQUEST['phone']."<br>";
    // print $_REQUEST['dates']."<br>";
	// print $_REQUEST['address']."<br>";
	// print $_REQUEST['gender']."<br>";
    
	// print $_REQUEST['country']."<br>";
    // // echo   "The image name is ".rand($_REQUEST['photo'])."<br>";
    // echo date('dmY_his').substr($_REQUEST['photo'],-4);


    
    // print_r($_REQUEST['checkbox']);
    ?>
</body>
</html>