<?php 

session_start();
if (isset($_POST['login'])) {
    $_SESSION['id']=1;
  if ($_SESSION['id']==1){
      echo "welcome User";
      header("Location:home.php");
  }
}
?>