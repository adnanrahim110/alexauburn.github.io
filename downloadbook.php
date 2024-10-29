<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download Your Product</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    /* Existing styles */
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f3f4f6;
    }

    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .card img {
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
      max-height: 400px;
      object-fit: cover;
    }

    .card-title {
      font-weight: 900;
      text-transform: uppercase;
      font-size: 2.5vw;
    }

    .download-button {
      background-color: #007bff;
      color: white;
      font-size: 16px;
      font-weight: bold;
      transition: background-color 0.3s;
      width: 100%;
      border-radius: 0;
      padding-block: 10px;
      border: 2px solid #000;
    }

    .download-button:hover {
      background-color: #034078;
      color: #fff;
    }

    .timer {
      margin-top: 20px;
    }

    .timer h3 {
      background-color: #000;
      color: #fff;
      margin-bottom: 0;
      font-size: 16px;
      padding-block: 10px;
      font-weight: 700;
      text-transform: uppercase;
    }

    #countdown {
      font-size: 15px;
      background-color: #034078;
      color: #ccc;
      padding: 10px 15px;
      text-align: start;
      display: flex;
      justify-content: space-between;
    }

    #countdown .t-in {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #fff;
      font-weight: 600;
      font-size: 25px;
    }

    #countdown .t-in span {
      line-height: 1;
    }

    #countdown .t_inner {
      font-size: 5.5px;
      text-transform: uppercase;
      line-height: 1;
      margin-top: 6px;
      font-weight: 300;
      color: #ccc;
      letter-spacing: 1px;
    }

    .error-message {
      color: #d9534f;
    }

    /* Alert styles */
    .alert-success {
      display: none;
      margin-top: 20px;
    }

    .btn_sc {
      border-radius: 0;
    }

    .btn_sc.btn-success:hover {
      border-color: #28a745;
      background-color: transparent;
      color: #28a745;
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <!-- Success Alert -->
        <div class="alert alert-success text-center d-flex justify-content-between" id="downloadAlert">
          <p class="m-0"><strong>Thank you!</strong> Your download has started successfully.</p>
          <a href="index.php" class="btn btn_sc btn-success btn-sm ml-3">Back to Home</a>
        </div>
        <div class="card text-center">
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
              $product_id = $row['order_id'];
              $expiration_time = $row['expiration_time'];
              $formatted_expiration_time = date('Y-m-d g:i A', strtotime($expiration_time));
          ?>

              <div class="row">
                <div class="col-12 col-md-5 d-flex justify-content-start pe-0">
                  <img src="assets/img/about/img-1.png" class="img-fluid" alt="Book Img">
                </div>
                <div class="col-12 col-md-7 d-flex justify-content-center align-items-center ps-0">
                  <div class="card-body">
                    <h3 class="card-title">The MCAllister Contingency</h3>
                    <p class="card-text">Your download link is valid for the next hour. Download your file below:</p>
                    <!-- Secure download link with success alert on click -->
                    <a href="download.php?secure_link=<?= $secure_link ?>" class="btn download-button"
                      onclick="showDownloadAlert()">Download File</a>
                    <div class="timer">
                      <h3>Link expires in:</h3>
                      <div id="countdown"></div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                // Set the expiration time for countdown
                var expirationTime = new Date("<?= $expiration_time ?>").getTime();

                // Countdown function
                var countdownTimer = setInterval(function() {
                  var now = new Date().getTime();
                  var distance = expirationTime - now;

                  if (distance < 0) {
                    clearInterval(countdownTimer);
                    document.querySelector('.card-body').innerHTML =
                      `<h5 class="text-danger">Link Expired</h5>
                      <p class='error-message'>The link has expired. Please contact support if you need assistance.</p>
                      <a href="shop.php" class="btn btn-danger">Go Back to Shop</a>`;
                    document.getElementById('downloadAlert').style.display = 'none';
                  } else {
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById('countdown').innerHTML =
                      "<div class='t-in t_hour'><span>" + hours + "</span><span class='t_inner'>hours</span>" +
                      "</div>:" +
                      "<div  class='t-in t_min'><span>" + minutes + "</span><span class='t_inner'>minutes</span>" +
                      "</div>:" +
                      "<div  class='t-in t_sec'><span>" + seconds + "</span><span class='t_inner'>seconds</span>" +
                      "</div>";

                    function showDownloadAlert() {
                      event.preventDefault();
                      document.getElementById('downloadAlert').style.display = 'block';
                      window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                      });

                      // Start the download after showing the alert
                      setTimeout(() => {
                        window.location.href = "download.php?secure_link=<?= $secure_link ?>";
                      }, 1000);
                    }
                  }
                }, 0);
              </script>

            <?php } else { ?>
              <div class="card-body">
                <h5 class="text-danger">Invalid or Expired Link</h5>
                <p class="error-message">The link you used is either invalid or has expired. Please try again or contact
                  support.</p>
                <a href="shop.php" class="btn btn-danger">Go Back to Shop</a>
              </div>
            <?php }
          } else { ?>
            <div class="card-body">
              <h5 class="text-danger">Access Denied</h5>
              <p class="error-message">You do not have permission to access this page directly.</p>
            </div>
            <?php header("Location: shop.php"); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
