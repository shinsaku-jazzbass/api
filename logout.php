<?php
require 'config2.php';

session_destroy();
echo json_encode(['success' => true]);

?>