<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .result-container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .result-label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .result-value {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Form Submission Result</h1>
  <div class="result-container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      echo "<p class='result-label'>Username:</p>";
      echo "<p class='result-value'>$username</p>";

      echo "<p class='result-label'>Password:</p>";
      echo "<p class='result-value'>$password</p>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $name = $_GET['name'];
      $email = $_GET['email'];

      echo "<p class='result-label'>Name:</p>";
      echo "<p class='result-value'>$name</p>";

      echo "<p class='result-label'>E-mail Address:</p>";
      echo "<p class='result-value'>$email</p>";
    } else {
      echo "<p>Invalid request method!</p>";
    }
    ?>
  </div>
</body>
</html>
