<?php

ob_start();
require_once "config.php";

$fname_error = $lname_error = $email_error = $pwd_error = $address_error = $cname_error = $mobile_error = $gender_error = $h1_error = $h2_error = $h3_error = $state_error = "";
$fname = $lname = $email = $pwd = $address = $cname = $mobile = $gender = $h1 = $h2 = $h3 = $state = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $marital_status = $_POST['marital_status'];
     $food = $_POST['food'];
     $father_name = $_POST['father_name'];
     $mother_name = $_POST['mother_name'];
     $surname = $_POST['surname'];
     $native_place = $_POST['native_place'];
     $address = $_POST['address'];
     $about_you = $_POST['about_you'];
     $education = $_POST['education'];
     $job_business = $_POST['profession'];
    

     // if (empty($_POST['fName'])) {
     //      $fname_error = "Please Enter your full name";
     // } else {
     //      $fname = $_POST['fName'];
     // }

     // if (empty(trim($_POST['lName']))) {
     //      $lname_error = "Please Enter your last name";
     // } else {
     //      $lname = $_POST['lName'];
     // }

     // if (empty(trim($_POST['email']))) {
     //      $email_error = "Please Enter your Email address";
     // } else {

     //      $stmt = mysqli_prepare($conn, "SELECT id FROM user_tbl WHERE email = ?");

     //      if ($stmt) {

     //           mysqli_stmt_bind_param($stmt, 's', $p_email);

     //           $p_email = $_POST['email'];

     //           if (mysqli_stmt_execute($stmt)) {
     //                mysqli_stmt_store_result($stmt);

     //                if (mysqli_stmt_num_rows($stmt) > 0) {
     //                     $email_error = "Email already registered";
     //                } else {
     //                     $email = $_POST['email'];
     //                }
     //           }
     //      }
     // }

     // if (empty(trim($_POST['mobile']))) {
     //      $mobile_error = "Please Enter your Mobile number";
     // } else {

     //      $query = "SELECT mobile FROM user_tbl WHERE mobile = ?";

     //      $stmt = mysqli_prepare($conn, $query);

     //      if ($stmt) {

     //           mysqli_stmt_bind_param($stmt, 's', $p_mobile);

     //           $p_mobile = $_POST['mobile'];

     //           if (mysqli_stmt_execute($stmt)) {
     //                mysqli_stmt_store_result($stmt);

     //                if (mysqli_stmt_num_rows($stmt) == 1) {
     //                     $mobile_error = "Number already registered";
     //                } else {
     //                     $mobile = $_POST['mobile'];
     //                }
     //           }
     //      }
     // }

     // if (isset($_POST['Hobby1'])) {
     //      $h1 = $_POST['Hobby1'];
     // } else {
     //      echo "";
     // }
     // if (isset($_POST['Hobby2'])) {
     //      $h2 = $_POST['Hobby2'];
     // } else {
     //      echo "";
     // }
     // if (isset($_POST['Hobby3'])) {
     //      $h3 = $_POST['Hobby3'];
     // } else {
     //      echo "";
     // }

     // $address = $_POST['address'];

     // if (empty(trim($_POST['password']))) {
     //      $pwd_error = "Please Create a password";
     // } else {
     //      if (strlen($_POST['password']) < 6) {
     //           $pwd_error = "Password length must be between 6 to 12 charactors";
     //      } else {
     //           $pwd = $_POST['password'];
     //      }
     // }

     // if (isset($_POST['gender'])) {
     //      $gender = $_POST['gender'];
     // } else {
     //      $gender_error = "Select Gender";
     // }

     // if ($_POST['state'] == "Not Selected") {
     //      $state_error = "Please select a State";
     // } else {
     //      $state = $_POST['state'];
     // }


     // if (empty($fname_error) and empty($lname_error) and empty($email_error) and empty($pwd_error) and empty($gender_error) and empty($state_error) and empty($mobile_error)) {


     $query = "INSERT INTO `users` (`name`, `email`, `mobile_number`, `marital_status`, `food`, `father_name`, `mother_name`, `surname`, `native_place`, `address`, `about_you`, `education`, `job_business`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

     $stmt = mysqli_prepare($conn, $query);

     if ($stmt) {

          mysqli_stmt_bind_param($stmt, "sssssssssssss", $p_name, $p_email, $p_mobile, $p_marital_status, $p_food, $p_father_name, $p_mother_name, $p_surname, $p_native_place, $p_address, $p_about_you, $p_education, $p_job_business);

          $p_name = $name;
          $p_email = $email;
          $p_mobile = $mobile;
          $p_marital_status = $marital_status;
          $p_food = $food;
          $p_father_name = $father_name;
          $p_mother_name = $mother_name;
          $p_surname = $surname;
          $p_native_place = $native_place;
          $p_address = $address;
          $p_about_you = $about_you;
          $p_education = $education;
          $p_job_business = $job_business;

          if (mysqli_stmt_execute($stmt)) {
               header("location: index.html");
          } else {
               echo "Someting went wrong";
          }
     } else {
          echo "Database error";
     }
     mysqli_stmt_close($stmt);
     // }
     mysqli_close($conn);
}