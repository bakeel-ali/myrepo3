<?php
$conn_link= mysqli_connect("localhost","root","","pro_db");
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }