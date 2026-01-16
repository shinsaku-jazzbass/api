<?php
// session_startより前に設定
ini_set('session.cookie_httponly', 1); // JSからの盗難防止
ini_set('session.cookie_samesite', 'None'); // または 'None' (後述)
//ini_set('session.cookie_secure', 1);   // HTTPS必須

ini_set('session.cookie_httponly', 1); // JSからの盗難防止
ini_set('session.cookie_samesite', 'None'); // または 'None' (後述)
//ini_set('session.cookie_secure', 1);   // HTTPS必須
header("Access-Control-Allow-Origin: *");
// CORS設定
//header("Access-Control-Allow-Origin: https://your-react-app.com");
header("Access-Control-Allow-Credentials: true"); // これが重要
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

session_start();
//$_SESSION['username'] = 'JohnDoe';
$_SESSION['user_id'] = "01";
echo json_encode(['loggedIn' => true, 'userId' => $_SESSION['user_id']]);
?>