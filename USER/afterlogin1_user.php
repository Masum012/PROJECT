<?php session_start();
include "../ALL/db.php";?>
<?php
				$header=$_POST['header'];
				$status=$_POST['status'];
				$user_id=$_SESSION['id'];
				
				$timezone = date("D, d M Y H:i:s A");
				$prefix=$_SESSION['id'].time();
				$link1=$_FILES['fileToUpload']['type'];
				
				$allowed =  array('gif','png' ,'jpg', 'PNG','JPG','JPEG','jpeg');
				$filename = $_FILES['fileToUpload']['name'];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				
				if(!in_array($ext,$allowed) ) {
					$file_type=0;
				}
				else {
					$file_type=1;
				}
				
				
				//$link1="http://localhost/PRPJECT/upload/".$prefix.$_FILES['fileToUpload']['name'];
				$link="../upload/".$prefix. basename($_FILES["fileToUpload"]["name"]);
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$link);
				
				if(file_exists($link))
				$sql="INSERT INTO post(post_text,time,post_header,user_id,link,file_type)VALUES('$status','$timezone','$header','$user_id','$link','$file_type')";
				else
				$sql="INSERT INTO post(post_text,time,post_header,user_id)VALUES('$status','$timezone','$header','$user_id')";
				mysql_query($sql);
				header("location:afterlogin_user.php");
				
?>

<?php
/* $target_dir = "../upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg"&&$imageFileType != "JPG" && $imageFileType != "png" &&$imageFileType != "PNG" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} */
?>