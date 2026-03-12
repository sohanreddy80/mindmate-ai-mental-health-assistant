<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("includes/db_connect.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {

        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {

            $_SESSION["user_id"] = $user_id;

            echo "<script>
            window.parent.postMessage('login-success','*');
            </script>";

            exit;

        } else {
            $error = "❌ Incorrect password.";
        }

    } else {
        $error = "❌ Email not found.";
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - Mental Health AI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

*{box-sizing:border-box;}

body{
margin:0;
padding:0;
font-family:'Segoe UI',sans-serif;
background:linear-gradient(-45deg,#1e3c72,#2a5298,#0f2027,#203a43);
background-size:400% 400%;
animation:gradientBG 15s ease infinite;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

@keyframes gradientBG{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.login-box{
background:rgba(255,255,255,0.05);
border:1px solid rgba(255,255,255,0.15);
backdrop-filter:blur(15px);
border-radius:15px;
padding:40px;
width:360px;
color:white;
box-shadow:0 0 20px rgba(255,255,255,0.1);
}

.login-box h2{
text-align:center;
margin-bottom:25px;
font-weight:600;
}

.login-box input{
width:100%;
padding:12px 14px;
margin-bottom:18px;
background:rgba(255,255,255,0.1);
border:none;
border-radius:10px;
color:white;
font-size:16px;
}

.login-box input::placeholder{
color:rgba(255,255,255,0.7);
}

.login-box button{
width:100%;
padding:12px;
border:none;
border-radius:10px;
background:#4CAF50;
color:white;
font-size:16px;
cursor:pointer;
}

.login-box button:hover{
background:#45a049;
}

.error{
text-align:center;
color:#ffaaaa;
margin-top:10px;
font-size:14px;
}

.footer-link{
text-align:center;
font-size:14px;
margin-top:15px;
}

.footer-link a{
color:#ffccff;
text-decoration:none;
}

.forgot{
text-align:right;
font-size:13px;
margin-bottom:15px;
}

.forgot a{
color:#ffccff;
text-decoration:none;
}

</style>

</head>

<body>

<div class="login-box">

<h2>🚀 Welcome Back</h2>

<form method="POST">

<input type="email" name="email" placeholder="Enter your email" required>

<input type="password" name="password" placeholder="Your password" required>

<div class="forgot">
<a href="forgot_password.php">Forgot password?</a>
</div>

<button type="submit">Login</button>

</form>

<?php if(!empty($error)){ ?>

<div class="error"><?php echo $error; ?></div>
<?php } ?>

<div class="footer-link">
Don’t have an account? <a href="register.php">Sign up</a>
</div>

</div>

</body>
</html>
