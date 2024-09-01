<?php global $conn;
include "../connector.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $article_type = $_POST["article_type"];
    $img_name = $_POST["img_name"];
    $content = $_POST["content"];
    $admin_id = $_GET["admin_id"];

    $sql = "INSERT INTO articles (title, type, img_name, content, writer_id) VALUES ('$title', '$article_type', '$img_name', '$content', $admin_id)";
    print_r($sql);
    $result = $conn->query($sql);

    header("location: ./manage-news.php?admin_id=$admin_id");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online News</title>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="create.css">
    </head>
<body>
    <?php include "./nav.php"; ?>
    <div class="content flex-center">
        <div class="popup w-full">
          <form class="form" method="post">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/>
                    <path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/>
                </svg>
            </div>
            <div class="note">
              <label class="title">New Article</label>
            </div>
            <input placeholder="Enter title" title="Enter title" name="title" type="text" class="input_field" required>
            <input placeholder="Enter article type" title="Enter article type"  name="article_type" type="text" class="input_field" required>
            <input placeholder="Enter image name" title="Enter image name"  name="img_name" type="text" class="input_field" required>
            <textarea placeholder="Enter content" title="Enter content"  name="content" type="text" class="textarea_field" required></textarea>
            <button class="submit">Submit</button>
          </form>
        </div>
    </div>
</body>
</html>
