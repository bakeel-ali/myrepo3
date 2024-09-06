<?php
require("database.php");

// استرجاع البيانات
$sql = "SELECT * FROM authors WHERE id = 21";
$result = mysqli_query($conn_link,$sql);

if (mysqli_num_rows($result)>0) {
   $row=mysqli_fetch_assoc($result);
   echo "<img src='".$row["auth_img"]."' class='n' alt='صورة المستخدم'/>"; 
} else {
    $profile_picture = null; // إذا لم توجد بيانات
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>عرض الصورة</title>
    <style>
        .n{ display: block;
        width: 200px;
        height: 300px;
        }
    </style>
</head>
<body>

<h2>الصورة:</h2>
   
   
   
   

<?php require("database_close.php"); ?>
</body>
</html>