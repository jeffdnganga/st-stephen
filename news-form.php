<?php
include('includes/header.php');
?>
<div class="container p-5">
    <form action="code.php" method="POST">
    <div class="mb-3">
        <label for="newsTitle" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="newsTitle">
    </div>
    <div class="mb-3">
        <label for="newsMessage" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="newsMessage" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label for="createdBy" class="form-label">Created by</label>
        <input type="text" class="form-control" name="createdBy" id="createdBy">
    </div>
    <button type="submit" name="submitNews" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include('includes/scripts.php');
?>