<?php
$con = mysqli_connect(localhost,"root",'reg');

$Username = $_POST['Username'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$sql = "INSERT INTO 'user'('Username', 'Name', 'Email', 'Password') VALUES ('$username', '$name', '$password', '$email')";

$rs = mysqi_query($con, $sql);

if($rs)
{
    echo "<h1><center>Registered Successfully !!!</center></h1>";

}

?>