<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MindWell - Mental Health AI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(to right, #74ebd5, #ACB6E5);
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      padding: 40px;
      max-width: 500px;
      text-align: center;
      color: #333;
    }

    .card h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .card p {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .btn-primary, .btn-outline-light {
      padding: 12px 30px;
      border-radius: 30px;
      font-size: 1rem;
      margin: 5px;
    }

    .emoji {
      font-size: 48px;
      margin-bottom: 15px;
    }

    @media (max-width: 576px) {
      .card {
        padding: 25px;
      }
    }
  </style>
</head>
<body>

<div class="card">
  <div class="emoji">🧠✨</div>
  <h1>MindWell</h1>
  <p>Your AI-Powered Mental Health & Stress Detection System</p>
  <a href="register.php" class="btn btn-primary">Get Started</a>
  <a href="login.php" class="btn btn-outline-light bg-dark text-white">Login</a>
</div>

</body>
</html>
