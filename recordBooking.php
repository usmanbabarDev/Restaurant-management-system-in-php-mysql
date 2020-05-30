<?php
$CITY=$_POST['city'];
$DATE=$_POST['date'];
$TIME=$_POST['time'];
$PEOPLE=$_POST['people'];
$EMAIL=$_POST['email'];
$PHONE=$_POST['phone'];
$query="insert into bkrecod (city,date,time,people,email,phone) values('$CITY','$DATE','$TIME','$PEOPLE','$EMAIL','$PHONE')";

$conn= mysqli_connect("localhost","root","","restaurant database");
if (mysqli_query($conn, $query)) {
    header("location:/restuarant/booking.php?recorded=successfully");
} 
else {
echo "not save";
}
?>