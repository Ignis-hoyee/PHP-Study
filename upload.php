
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if((($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2048000)
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        echo "注册成功啦！";
        rename($_FILES["file"]["name"], $user_id . 'jpg');
        move_uploaded_file($_FILES["file"]["tmp_name"], "head/" . $_FILES["file"]["name"]);

    }
}


$DBhost = '127.0.0.1:3306';
$DBuser = 'root';
$DBpswd = '123456';

$conn = mysqli_connect($DBhost, $DBuser, $DBpswd);
if(! $conn){
    die('connet failed:' . mysqli_error($conn));
}
echo 'connet completed<br />';


?>