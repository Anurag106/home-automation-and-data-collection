<?php
$servername="localhost";
$username="root";
$password="";
$database="dataforai";
//giving connection
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
die("coneection failed: " .$conn->connect_error);

}
echo "connected successfully";
$sql="insert into time_details(device,month,date,day,hour,min) values ($_GET[device],$_GET[month],$_GET[date],$_GET[day],$_GET[hour],$_GET[min])";
$check=$conn->query($sql);

$conn->close();
?>