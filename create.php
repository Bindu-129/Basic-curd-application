<?php
include("db.php");

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts(title,content)
            VALUES('$title','$content')";

    mysqli_query($conn,$sql);

    echo "Post Added Successfully";
}
?>

<form method="POST">

    <input type="text"
           name="title"
           placeholder="Post Title">

    <br><br>

    <textarea name="content"
              rows="5"
              cols="40"></textarea>

    <br><br>

    <button name="submit">
        Add Post
    </button>

</form>