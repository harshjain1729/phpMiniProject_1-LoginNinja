<?php
$login=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'dbconnection.php';
// echo "True";
$mail = $_POST["mail"];
$pass = $_POST["pass"]; 
$sql = "SELECT * FROM `Users` WHERE `Email` = '$mail'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num==1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pass,$row['Password'])){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $mail;
        header("location: Home.php");
    }
}
else{
    echo "Error";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Login.css">
</head>

<body>
    <!-- navigation bar -->
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
    <!-- Login -->
    <div class="container">
        <p>
            Login Here
        </p>
        <form action="Login.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="mail">Email Id</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="mail" id="mail" size=65>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:4px;">
                        <label for="pass">Password</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass" id="pass" size=65>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:14px;">
                        <Button type="submit">Submit</Button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>