<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Check if 'country' is set in the POST data
  if (isset($_POST['country'])) {
    // Sanitize the country input to prevent XSS attacks
    $country = htmlspecialchars($_POST['country']);

    // Respond with a JSON success message
    $response = [
      'status' => 'success',
      'message' => 'Country received successfully.',
      'country' => $country  // Return the country back in the response
    ];

    // Send the response in JSON format
    echo json_encode($response);
  } else {
    // If the country is not set, respond with an error message
    $response = [
      'status' => 'error',
      'message' => 'No country selected.'
    ];

    // Send the error response in JSON format
    echo json_encode($response);
  }
} else {
  // If the request is not POST, respond with an error
  $response = [
    'status' => 'error',
    'message' => 'Invalid request method.'
  ];

  // Send the error response in JSON format
  echo json_encode($response);
}
