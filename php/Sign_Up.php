<?php
include 'dbconnection.php';
$mail = $_POST["mail"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];
$exists = false;
$hash = password_hash($pass, PASSWORD_DEFAULT);
if(($pass==$cpass) && $exists==false){
    $sql = "INSERT INTO `Users` (`Email`, `Password`) VALUES ('$mail', '$hash')";
    $result = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-2</title>
    <link rel="stylesheet" href="../css/Sign_Up.css">
</head>
<body>
    <!-- Navigation Bar -->
    <div class>
        <ul>
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
        </ul>
    </div>
    <hr>
    <!-- Registration -->
    <div class="container">
        <p>
            Register Yourself!
        </p>
        <form action="Sign_Up.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="mail">Email Id</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="mail" name="mail" id="mail" size = 65>
                    </td>
                </tr>
                <tr>
                    <td  style = "padding-top:4px;">
                        <label for="pass">Password</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass" id="pass" size = 65>
                    </td>
                </tr>
                <tr>
                    <td  style = "padding-top:4px;">
                        <label for="cpass">Confirm Password</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="cpass" id="cpass" size = 65>
                    </td>
                </tr>
                <tr>
                    <td  style = "padding-top:14px;">
                        <Button type = "submit">Submit</Button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>