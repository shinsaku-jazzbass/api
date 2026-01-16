<?php
require 'config2.php';
    //header("Access-Control-Allow-Origin: *"); //add this CORS header to enable any domain to send HTTP requests to these endpoints:
    //header("Access-Control-Allow-Methods: GET, POST");
    //header("Access-Control-Allow-Headers: Content-Type");

    // session_startより前に設定
// ini_set('session.cookie_httponly', 1); // JSからの盗難防止
// ini_set('session.cookie_samesite', 'None'); // または 'None' (後述)
// ini_set('session.cookie_secure', 1);   // HTTPS必須

// // CORS設定
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Credentials: true"); // これが重要
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
// header("Access-Control-Allow-Headers: Content-Type, Authorization");

// session_start();

 
    $conn = new mysqli("localhost", "root", "root", "reactjsDB");
    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit();
    }
    else{
        $eData = file_get_contents("php://input");
        $dData = json_decode($eData, true);
 
        $user = $dData['user'];
        $pass = $dData['pass'];
        $password = md5($pass);
        $result = "";
 
        if($user != "" and $pass != ""){
            $_SESSION['user_id']=$user;
            $sql = "SELECT * FROM user WHERE user='$user';";
            $res = mysqli_query($conn, $sql);
 
            if(mysqli_num_rows($res) != 0){
                $row = mysqli_fetch_array($res);
                if($password != $row['pass']){
                    $result = "Invalid password!";
                }
                else{
                    $result = $_SESSION['user_id'].":Loggedin successfully! Redirecting...";
                }
            }
            else{
                $result = "Invalid username!";
            }
        }
        else{
            $result = "";
        }
 
        $conn -> close();
        $response[] = array("result" => $result);
        echo json_encode($response);
    }
 
?>