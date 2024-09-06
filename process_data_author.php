<?php
// define variables and set to empty values
// error authors
$nameErr = $emailErr = $ageErr = $countryErr= $auth_imgErr = "";
//authors
$name = $email = $country = $age = "";
$auth_img="";


//books 
$title = $field = $num_page = $des_book =$price= "";
$book_file=$book_img="";
//error books 
$book_imgErr= $book_fileErr=$priceErr= "";
$titleErr = $fieldErr = $num_pageErr = $des_bookErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //name
   if (empty($_POST["name"])) {
      $nameErr = "Name is required";
   } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
         $nameErr = "Only letters and white space allowed";
      }
   }
   // email
   if (empty($_POST["email"])) {
      $emailErr = "Email is required";
   } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
      }
   }
   // Age 
   if (empty($_POST["age"])) {
      $age = null;
   } else {
      $age = test_input($_POST["age"]);
      if(!preg_match("/^[0-9]{2,3}$/",$age)){
         $ageErr="Only Numbers ";
      }
   }
   //Country
   if (empty($_POST["country"])) {
      $nameErr = "country is required";
   } else {
      $country = test_input($_POST["country"]);
      // check if country only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $country)) {
         $countryErr = "Only letters and white space allowed";
      }
   }

   // titl book
   if (empty($_POST["title"])) {
      $tilteErr = "title of book is required";
   } else {
      $title = test_input($_POST["title"]);
   }
   // field
   if (empty($_POST["field"])) {
      $fieldErr = "field  is required";
   } else {
      $field = test_input($_POST["field"]);
      // check if field only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $field)) {
         $fieldErr = "Only letters and white space allowed";
      }
   }
   // num_page 
   if (empty($_POST["num_page"])) {
      $num_pageErr = "numbers page is required ";
   } else {
      $num_page = test_input($_POST["num_page"]);
      if(!preg_match("/^[0-9]*$/",$num_page)){
         $num_pageErr="Only Numbers ";
      }
   }
   // $des_book
   if (empty($_POST["des_book"])) {
      $des_bookErr = "describtion of book is required";
   } else {
      $des_book = test_input($_POST["des_book"]);
   }
   //price
   if (empty($_POST["price"])) {
      $priceErrErr = "numbers page is required ";
   } else {
      $price = test_input($_POST["price"]);
      if(!preg_match("/^[0-9.]*$/",$price)){
         $priceErr="Only Numbers ";
      }
   }

   $uploadauthimg=false;
   if (isset($_FILES['auth_img']) && !empty($_FILES['$auth_img'])) {
       $uploadauthimg=uploadimg('authors_img/','auth_img',$auth_imgErr);
   }
   
   $upbook_img=uploadimg('books_img/','book_img',$book_imgErr);
  $ff= uploadfile("books_file/",'book_file',$book_fileErr);
}
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
