<?php
require 'config.php';

$data = json_decode(file_get_contents("php://input"), true);

if ($data['email'] === 'admin@test.com' && $data['password'] === '1234') {
    $_SESSION['user'] = [
        'email' => $data['email']
    ];
    echo json_encode(['success' => true]);
} else {
    http_response_code(401);
    echo json_encode(['success' => false]);
}
?>