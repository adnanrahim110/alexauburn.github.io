<?php
include 'config/dbconn.php';

if (isset($_GET['secure_link'])) {
  $secure_link = $_GET['secure_link'];
  $current_time = date('Y-m-d H:i:s');

  // Query to verify the secure link and check expiry
  $stmt = $conn->prepare("SELECT * FROM secure_links WHERE download_token = ? AND expiration_time > ?");
  $stmt->bind_param("ss", $secure_link, $current_time);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $file_path = 'assets/.pdf/The_McAllister_Contingency_E_Book.pdf';

    // Check if the file exists in the protected directory
    if (file_exists($file_path)) {
      // Set headers to initiate file download
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file_path));

      // Clear output buffer and read the file
      ob_clean();
      flush();
      readfile($file_path);
      exit;
    } else {
      echo "File not found.";
    }
  } else {
    echo "Invalid or expired download link.";
  }
} else {
  echo "Access denied.";
}
