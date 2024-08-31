<?php global $conn;
include "../connector.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online News</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Online News</div>
        <ul class="nav-links">
        <li><a href="index.php">Campus News</a></li>
            <li><a href="educational_news.php">Educational News</a></li>
            <li><a href="sports_news.php">Sport News</a></li>
            <li><a href="../help.php">Help</a></li>
            <li><a href="../login.php">Login</a></li>
            <li><a href="../signup.php" class="signup-btn">Signup</a></li>
        </ul>
    </nav>

    <div class="content">
        <!-- Today's News Section -->
        <section class="news-section">
            <h2>Educational News</h2>
            <div class="news-grid">
<?php
$sql = "SELECT * from articles WHERE type = 'EDU'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "
                <div class='news-item'>
                    <img src='./images/$row[image].jpg' alt='Wildfire Image'>
                    <h3>$row[title]</h3>
                    <p>$row[content]</p>
                </div>";
}
?>
            </div>
        </section>


    </div>

</body>
</html>
