<?php
include("db.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($result);

if(isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<h2>Edit Post</h2>

<form method="POST">
    <input type="text" name="title" value="<?php echo $post['title']; ?>"><br><br>
    <textarea name="content"><?php echo $post['content']; ?></textarea><br><br>
    <button type="submit" name="update">Update</button>
</form>