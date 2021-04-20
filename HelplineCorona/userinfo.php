<?php
$con=mysqli_connect('localhost','root');
if($con)
{
    echo "connection sucessful";
}
else
{
    echo "no connection";
}

mysqli_select_db($con,'youtubeuserdataa');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$symptoms = $_POST['symptoms'];

$query=" insert into userinfodataa (user,email,mobile,symptoms)
values('$user','$email','$mobile','$symptoms') ";

echo "$query";

mysqli_query($con,$query);
header('location:index.php');



?>