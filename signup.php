<?php global $conn;
include "./connector.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repass = $_POST["repassword"];

    if ($password == $repass) {
        $sql = "INSERT INTO user (user_name, pass, user_type) VALUES ('$username', '$password','WRITER') ";
        $result = $conn->query($sql);
    }

    header("location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online News</title>
        <link rel="stylesheet" href="login.css">
    </head>
<body>
    <div class="flex">
        <div class="hero">
        </div>
        <div class="flex section">
            <form class="form" method="post">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper">
                        <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/>
                        <path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/>
                    </svg>
                </div>
                <div class="note">
                    <label class="title">Sign up</label>
                </div>
                <input placeholder="Enter your username" title="Enter your username" name="username" type="text" class="input_field" required>
                <input placeholder="Enter your password" title="Enter your password" name="password" type="password" class="input_field" required>
                <input placeholder="Enter your password again" title="Enter your password again" name="repassword" type="password" class="input_field" required>
                <button class="submit">Submit</button>
                <p class="p">Have an account? <a href="./login.php"><span class="span">Login</span></a>
            </form>
        </div>
    </div>
</body>
</html>
