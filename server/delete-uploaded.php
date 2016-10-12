<?php
header('Content-Type: application/json');

$response = array('status' => 'success', 'message' => 'Image removed');

echo json_encode($response);
?>