<?php global $conn;
include "./connector.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM user WHERE user_name = '$username'";
        $result = $conn->query($sql);
        $user_data = $result->fetch_assoc();

        if ($user_data["pass"] == $password) {
            if ($user_data["user_type"] == "ADMIN") {
                header("location: /News_Website/Admin.php");
                exit();
            } elseif ($user_data["user_type"] == "WRITER") {
                header("location: /News_Website/writer.php");
                exit();
            }
        } else {
            $errorMessage = "Username or Password is Incorrect";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="flex">
        <div class="hero">
        </div>
    <div class="flex section">
      <form class="form">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper">
              <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/>
              <path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
        </div>
        <div class="note">
          <label class="title">Login to your account</label>
        </div>
        <input placeholder="Enter your username" title="Enter your username" name="username" type="text" class="input_field">
        <input placeholder="Enter your password" title="Enter your password" name="password" type="password" class="input_field">
        <button class="submit">Submit</button>
      </form>
    </div>
    </div>

 <?php
// echo '<div>
//         <form method="post" >
//             <div >
//                 <h3>Username</h3>
//                 <input type="text" name="username" required>
//             </div>
//             <div >
//                 <h3>Password</h3>
//                 <input type="password" name="password" required>
//             </div>
//          <div >
//             <input type="submit" class="btn" value="Login">
//             </div>
//         </form>' .
//         (empty($errorMessage) ? "" : "<p>$errorMessage</p>") .
// '
//     </div>
//     '
//
?>
</body>
</html>