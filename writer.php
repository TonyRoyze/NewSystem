<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online News</title>
        <link rel="stylesheet" href="writer.css">
    </head>
<body>
    <div class="writer-panel">
        <!-- Profile Picture -->
        <div class="profile-pic">
            <img src="./images/icons8-writer-100.png" alt="Profile Picture">
            <h2>Writer Name</h2>
        </div>

        <!-- Write New News Button -->
        <div class="write-news">
            <button onclick="location.href='write-news.html'">
                <i class="material-icons">create</i>
                New Article
            </button>
        </div>

        <!-- Old News Articles -->
        <section class="old-news">
            <h2>Previous Articles</h2>
            <div class="news-item">
                <h3>News Title 1</h3>
                <p>This is a brief description of the news item. It gives a quick summary of the content.</p>
                <button onclick="location.href='edit-news.html'">Edit</button>
                <button>Delete</button>
            </div>
            <div class="news-item">
                <h3>News Title 2</h3>
                <p>This is a brief description of the news item. It gives a quick summary of the content.</p>
                <button onclick="location.href='edit-news.html'">Edit</button>
                <button>Delete</button>
            </div>
            <!-- Add more news items as needed -->
        </section>
    </div>
</body>
</html>
