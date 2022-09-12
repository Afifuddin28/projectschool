<?php
    error_reporting(0);
    session_start();
    if(isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
    if ($user == 'afifcoder' AND $pass == 'Afifslol123') {
        // session
        session_start();
        $_SESSION['login succes'] = true;

        header("location: admin.php");
    }elseif ($user == 'adangsp' AND $pass == '1234567') {
        header("location: admin.php");
    }else{
        $salah = "<p>The username or password you entered is incorrect!<br>Please try again.</p>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Afif Project</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="loginup">
    <div class="container">
        <h1 class="greeting">Hi! I'm Afif<br>Welcome to my page!</h1>
        <div class="row justify-content-between">
            <div class="login-box">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Username or email address" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>

                    <div class="login" name="login" >
                        <button class="btn" name="login">log in</button>
                    </div>
                    <?php echo $salah; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    


</body>
</html>