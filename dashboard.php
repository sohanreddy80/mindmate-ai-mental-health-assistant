<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI Mental Health Companion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Outfit', sans-serif;
            background: black;
            overflow: hidden;
        }

        .background-animation {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: radial-gradient(circle at center, #61045F, #200122);
            animation: gradientShift 20s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background: radial-gradient(circle at top left, #61045F, #200122);
            }
            50% {
                background: radial-gradient(circle at bottom right, #61045F, #200122);
            }
            100% {
                background: radial-gradient(circle at top left, #61045F, #200122);
            }
        }

        .logout-button {
            position: absolute;
            top: 20px;
            right: 30px;
            background-color: #FF4C4C;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            z-index: 999;
            text-decoration: none;
        }

        .chat-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            z-index: 1;
            padding: 20px;
        }

        iframe {
            min-width: 100%;
            max-width: 100%;
            height: 688px;
            border: none;
            width: 100%;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
<div class="background-animation"></div>
<a href="logout.php" class="logout-button">Logout</a>
<div class="chat-container">
    <iframe id="JotFormIFrame-0197d900249874669c7e44d78f9d39f04c7a"
        title="Morgan: Mental Health Assistant" onload="window.parent.scrollTo(0,0)"
        allowtransparency="true" allow="geolocation; microphone; camera; fullscreen"
        src="https://agent.jotform.com/0197d900249874669c7e44d78f9d39f04c7a?embedMode=iframe&background=1&shadow=1"
        frameborder="0" style="
            min-width:100%;
            max-width:100%;
            height:688px;
            border:none;
            width:100%;
        " scrolling="no">
    </iframe>
</div>

<script src='https://cdn.jotfor.ms/s/umd/latest/for-form-embed-handler.js'></script>
<script>
  window.jotformEmbedHandler("iframe[id='JotFormIFrame-0197d900249874669c7e44d78f9d39f04c7a']",
    "https://www.jotform.com")
</script>
</body>
</html>
