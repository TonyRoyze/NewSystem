<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">Admin Panel</div>
        <ul class="nav-links">
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="#">Manage News</a></li>
            <li><a href="#">Manage Users</a></li>
            <li><a href="#">Manage Writers</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            
            <h1>Welcome to the admin .</h1>
        </div>

        <!-- Profile Picture -->
        <div class="profile-pic-container">
            <img src="./images/icons8-admin-100.png" alt="Profile Picture" class="profile-pic">
        </div>

        <!-- Buttons for Management Sections -->
        <section class="section">
            <h2>Manage Content</h2>
            <div class="button-grid">
                <!-- Button for Adding News -->
                <a href="add-news.html" class="action-button">
                    <img src="./images/icons8-article-96.png" alt="Add News Icon">
                    Add News Article
                </a>

                <!-- Button for Managing News -->
                <a href="manage-news.html" class="action-button">
                    <img src="./images/icons8-manage-96.png" alt="Manage News Icon">
                    Manage News
                </a>

                <!-- Button for Managing Users -->
                <a href="manage-users.html" class="action-button">
                    <img src="./images/icons8-users-100.png" alt="Manage Users Icon">
                    Manage Users
                </a>

                <!-- Button for Managing Writers -->
                <a href="manage-writers.html" class="action-button">
                    <img src="./images/icons8-writer-96.png" alt="Manage Writers Icon">
                    Manage Writers
                </a>
            </div>
        </section>
    </div>
</body>
</html>
