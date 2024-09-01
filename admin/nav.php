<?php

$admin_id = $_GET["admin_id"];

echo "
<div class='sidebar'>
    <ul class='nav-links'>
        <li><a href='manage-news.php?admin_id=$admin_id'>Manage News</a></li>
        <li><a href='manage-users.php?admin_id=$admin_id'>Manage Users</a></li>
        <li><a href='../login.php'>Logout</a></li>
    </ul>
</div>
";
?>
