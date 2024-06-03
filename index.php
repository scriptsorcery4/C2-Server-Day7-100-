<?php 
    require_once './app/config/config.php';
    require_once './app/classes/Admin.php';
    

    if (isset($_SESSION['admin_id'])) {
        header("Location: dashboard.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Admin();
        $admin = $db->fetchAdmin($username, $password);
    

    if ($admin) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        
        $_SESSION['error_login'] = "Invalid username or password.";
    }
}

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Login</title>
</head>
<body>
<?php if (isset($_SESSION['error_login'])): ?>
        <div class='error'>
            <p><?= $_SESSION['error_login']; unset($_SESSION['error_login']); ?></p>
        </div>
    <?php endif; ?>
    
    <section class='login'>
        <div class='top-login'>
            <h3>C2 - Server</h3>
            <p>Made by scriptsorcery4</p>
        </div>
        <div class='bottom-login'>

            <div>
                <h2>Account Log In</h2>
                <p>PLEASE LOGIN TO CONTNUE TO YOUR ACCOUNT</p>
            </div>

            <form action="" method="post">
                    <input type="text" id="username" name="username" placeholder='Username' required>
                    <input type="password" id="password" name="password" placeholder='Password' required>
                    <button type="submit">LOG IN</button>
            </form>
        </div>
    </section> 
</body>
</html>
