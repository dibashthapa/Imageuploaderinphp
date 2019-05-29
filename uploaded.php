<?php 
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
$filenamenew=$username.'.'.$ActualFileExt;
$filelocation='uploads/'.$filenamenew;
move_uploaded_file($tempFileName,$filelocation);
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