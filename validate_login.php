<?php 

session_start();
if(isset($_SESSION['user'])) {
    header("location: ./");
    exit;
}

if(isset($_POST)) {
    extract($_POST);
    $conn = mysqli_connect('localhost', 'Vishal', '1rn17is118', 'flat_management');
    if($conn) {
        $sql = "SELECT * from user WHERE USER_ID = '$username' LIMIT 1";
        $results = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($results);
        if($row) {
            if(password_verify($password, $row['PASSWORD'])===true) {
                $_SESSION['user'] = [
                    "name" => $row['USER_NAME']
                ];
                header("location: ./index.php");
                exit;
            }else{
                header("location: ./login.php?error=Password doesn't match");
                exit;
            }
        }else{
            header("location: ./login.php?error=User Not Found");
            exit;
        }
    }else{
        echo "not connected : ".mysqli_connect_error();
    }
}