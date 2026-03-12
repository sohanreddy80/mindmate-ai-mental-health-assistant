<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MindWell Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { 
      background: linear-gradient(to right, #e0c3fc, #8ec5fc);
      font-family: 'Segoe UI', sans-serif;
    }
    .dashboard-box {
      margin-top: 100px;
      background: white;
      padding: 40px;
      border-radius: 14px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.15);
    }
    .greeting {
      font-size: 24px;
      font-weight: 600;
      color: #333;
    }
    .nav-links a {
      margin: 10px;
    }
  </style>
</head>
<body>

<div class="container text-center">
  <div class="col-md-8 offset-md-2 dashboard-box">
    <div class="greeting">👋 Welcome, <span style="color: #007bff;"><?php echo $_SESSION["user_name"]; ?></span>!</div>
    <p class="mt-3">You're now logged in to <strong>MindWell</strong>, your personal mental wellness assistant.</p>

    <div class="nav-links mt-4">
      <a href="mood_check.php" class="btn btn-success">Check My Mood</a>
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
  </div>
</div>

</body>
</html>
