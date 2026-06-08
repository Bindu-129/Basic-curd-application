<?php

include("db.php");

$result = mysqli_query(
    $conn,
    "SELECT * FROM posts ORDER BY id DESC"
);

echo "<h1>Blog Posts</h1>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<h2>".$row['title']."</h2>";

    echo "<p>".$row['content']."</p>";

    echo "<a href='edit.php?id=".$row['id']."'>Edit</a> | ";

    echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";

    echo "<hr>";
}

echo "<br><a href='create.php'>Add New Post</a>";

?>