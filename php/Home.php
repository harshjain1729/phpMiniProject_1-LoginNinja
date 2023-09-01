<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    $loggedin = true;
    header("location: login.php");
    exit;
}
else{
    $loggedin = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-2 - <?php echo $_SESSION['username']?></title>
    <link rel="stylesheet" href="../css/Home.css">
</head>
<body>
    <div>
        <ol>
            <li>
                <a href="Home.php">
                LoginNinja
                </a>
            </li>
            <li>
                <a href="Home.php">Home</a>
            </li>
            <li>
                <a href="Sign_Up.php">Sign Up</a>
            </li>
            <li>
                <a href="Login.php">Log in</a>
            </li>
            <li class="logout">
                <a href="Logout.php">Logout</a>
            </li>
        </ol>
    </div>
    <hr>
    <h1>Welcome-<?php echo $_SESSION['username']?></h1>
</body>
</html>