<?php
include_once "conn.php";
include_once "login/php";
if ($_SESSION['id']==1) {
    echo "welcome user";


echo '
<form action="uploaded.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="text" name="username" placeholder="enter your name">
<button type="submit" name="submit">Upload Image</button>
</form>';
}
else {
    
   header("Location:index.php");
}

?>
<?php 
$sql='SELECT * FROM user';
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0 ) {
    $id=$row['id'];
    $sqlImg='SELECT * FROM profileimg WHERE userid="$id"';
    $resultImg=mysqli_query($conn,$sqlImg);
while ($rowImg=mysqli_fetch_assoc($resultImg)) {
    echo "<div>";
    if ($rowImg['status'] == 0) {
        echo "<img src='uploads/'.$id.'.jpg'>";
    }
    else {
        echo "<img src='uploads/profiledefault.jpg'>";
    }
    echo $row['username'];
    echo "</div>";
}
}
?>
<html>
    <body>
        <form action="logout.php" method="POST">
            <button type="submit" name="logout">LOG OUT</button>
</form>
</body>
    </html>
