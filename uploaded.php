<?php 
session_start();
include_once "conn.php";
$id=$_SESSION['id'];
if (isset($_POST['submit']))
{
   $username=$_POST["username"];
   $filename=$_FILES["file"] ["name"];
$tempFileName= $_FILES["file"] ["tmp_name"];
$fileError=$_FILES["file"] ["error"];
$fileSize=$_FILES["file"] ["size"];
$allowedExt=array("jpg","png","jpeg");
$fileExt=explode(".",$filename);
$ActualFileExt=strtolower(end($fileExt));
if (in_array($ActualFileExt,$allowedExt)){
if ($fileError === 0) {
if ($fileSize <1000000) {
$filenamenew='profile'.$id.'.'.$ActualFileExt;
$filelocation='uploads/'.$filenamenew;
move_uploaded_file($tempFileName,$filelocation);
$sql="UPDATE profileimg SET status=0 WHERE userid='$id';";
$result=mysqli_query($conn.$sql);
echo "You are welcome".$username;
}
else {
   echo "File is too large to upload";
}
}
else {
   echo "error encountered";
}
}
};


?>;