<?php
session_start();

// initializing variables
$username = "";
$userid    = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'Vishal', '1rn17is118', 'flat_management');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $userid = mysqli_real_escape_string($conn, $_POST['userid']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($userid)) { array_push($errors, "User ID is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE   USER_NAME='$username' OR USER_ID='$userid' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['USER_NAME'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['USER_ID'] === $userid) {
      array_push($errors, "User id already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password= password_hash($password_1, PASSWORD_DEFAULT);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (USER_NAME, USER_ID, PASSWORD) 
  			  VALUES('$username', '$userid', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['USER_NAME'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
/*
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "NO RECORDS FOUND");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password1 = md5($password);
  	$query = "SELECT * FROM user WHERE USER_NAME='$username' AND PASSWORD='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}*/

?>