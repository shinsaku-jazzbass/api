<?php
require 'config.php';

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo json_encode(['loggedIn' => false]);
    exit;
}

echo json_encode([
    'loggedIn' => true,
    'user' => $_SESSION['user']
]);

?>