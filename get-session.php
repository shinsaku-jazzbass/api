<?php
// セッションを開始
session_start();

// セッションに保存されている 'user_id' を取得
$userId = $_SESSION['user_id'] ?? null;

// 取得したデータをJSON形式で出力
header('Content-Type: application/json');
echo json_encode(['userId' => $userId]);
?>