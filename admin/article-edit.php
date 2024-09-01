<?php global $conn;
include "../connector.php";

$title = "";
$article_type = "";
$img_name = "";
$content = "";

$article_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $article_type = $_POST["article_type"];
    $img_name = $_POST["img_name"];
    $content = $_POST["content"];
    $writer_id = $_POST["writer_id"];
    $article_id = $_POST["article_id"];

    $sql =
        /** @lang text */
        "UPDATE articles " .
        "SET title = '$title', type = '$article_type', img_name = '$img_name', content = '$content', writer_id = '$writer_id' " .
        "WHERE article_id = '$article_id'";
    $result = $conn->query($sql);

    $admin_id = $_GET["admin_id"];
    header("location: ./manage-news.php?admin_id=$admin_id");
}

if (isset($_GET["article_id"])) {
    $article_id = $_GET["article_id"];
    $sql = "SELECT * FROM articles WHERE article_id='$article_id '";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $title = $row["title"];
    $article_type = $row["type"];
    $img_name = $row["img_name"];
    $content = $row["content"];
    $writer_id = $row["writer_id"];
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
        <div class="popup">
          <form class="form" method="post">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115DFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-plus">
                  <path d="M2 21a8 8 0 0 1 13.292-6"/>
                  <circle cx="10" cy="8" r="5"/><path d="M19 16v6"/><path d="M22 19h-6"/>
                </svg>
            </div>
            <div class="note">
              <label class="title">Edit User</label>
            </div>
            <input type="hidden" name="article_id" value="<?php echo $article_id; ?>">
            <input type="hidden" name="writer_id" value="<?php echo $writer_id; ?>">
            <input placeholder="Enter title" title="Enter title" name="title" type="text" class="input_field" value="<?php echo $title; ?>" required>
            <input placeholder="Enter article type" title="Enter article type"  name="article_type" type="text" class="input_field" value="<?php echo $article_type; ?>" required>
            <input placeholder="Enter image name" title="Enter image name"  name="img_name" type="text" class="input_field" value="<?php echo $img_name; ?>"required>
            <textarea placeholder="Enter content" title="Enter content"  name="content" type="text" class="textarea_field" required><?php echo $content; ?></textarea>
            <button class="submit">Submit</button>
          </form>
        </div>
    </div>
</body>
</html>
