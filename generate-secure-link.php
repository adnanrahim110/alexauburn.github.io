<?php
include 'config/dbconn.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $product_id = $_POST['product_id'];
  $expiry_time = date('Y-m-d H:i:s', strtotime('+1 hour', time()));
  $secure_link = bin2hex(random_bytes(16));

  // Insert secure link into the secure_links table
  $stmt = $conn->prepare("INSERT INTO secure_links (order_id, download_token, expiration_time) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $product_id, $secure_link, $expiry_time);

  if ($stmt->execute()) {
    echo json_encode(['success' => true, 'secure_link' => $secure_link]);
  } else {
    echo json_encode(['success' => false, 'error' => 'Error generating link']);
  }
} else {
  echo json_encode(['success' => false, 'error' => 'Invalid request method']);
}
