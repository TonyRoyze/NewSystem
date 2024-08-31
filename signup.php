<?php global $conn;
include ('./connector.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];

    
    if ($password == $repass){
        $sql = "INSERT INTO user (user_name, pass, user_type) VALUES ('$username', '$password','WRITER') ";
        $result = $conn->query($sql);
    }

    header("location: ./writer.php");

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
<?php
echo '<div>
        <form method="post" >
            <div >
                <h3>Username</h3>
                <input type="text" name="username" required>
            </div>
            <div >
                <h3>Password</h3>
                <input type="password" name="password" required>
            </div>
            <div >
                <h3>Re-enter Password</h3>
                <input type="password" name="repass" required>
            </div>
         <div >
            <input type="submit" class="btn" value="Signup">
            </div>
        </form>' . 
        (empty($errorMessage) ? "" : "<p>$errorMessage</p>") . 
'
    </div>
    '
?>
</body>
</html>
