<?php
include('includes/header.php');
include('dbconnect.php');
if (isset($_POST['edit_button'])){
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM news WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);
}

foreach($query_run as $news){
    echo '<div class="container p-5">
    <h4 class="text-primary">Edit News Details</h4>
    <form action="code.php" method="POST">
    <input type="hidden" name="edit_id" value=" ' . $news['id'] . ' ">
    <div class="mb-3">
        <label for="newsTitle" class="form-label">Title</label>
        <input type="text" class="form-control" name="edit_title" value=" ' . $news['title'] . ' ">
    </div>
    <div class="mb-3">
        <label for="newsMessage" class="form-label">Message</label>
        <textarea class="form-control" name="edit_message" rows="10">' . $news['message'] . '</textarea>
    </div>
    <div class="mb-3">
        <label for="createdBy" class="form-label">Created by</label>
        <input type="text" class="form-control" name="edit_createdBy" value=" ' . $news['created_by'] . ' ">
    </div>
    <button type="submit" name="submit_changes" class="btn btn-primary">Submit Changes</button>
    <a class="btn btn-danger" href="news.php">Cancel</a>
    </form>
</div>';
}




include("includes/scripts.php");
?>
