<!-- THIS IS OUR API (Application Programming Interface) -->
<?php

include('dbconnect.php');

if (isset($_POST['send'])){
    $userName = $_POST['user-name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // echo $userName . '<br>' . $email . '<br>' . $subject . '<br>' . $message;

    // $sql = "INSERT INTO contact_us VALUES (\'15\', \'Mark\', \'mark@gmail.com\', \'Meeting\', \'What time is the meeting?\', now());";

    // inserting data to the database
    $insertQuery = "INSERT INTO contact_us2 (name, email, subject, message, created_at) VALUES ('$userName', '$email', '$subject', '$message', now());";

    // code for running the query
    $queryRun = mysqli_query($connection, $insertQuery);
    // to check if query has run successfully 
    if ($queryRun){
  
        echo "Message sent successfully";
        // to return user to the contact page
        header("Location: contact.php");
    }
    else {

        echo "Message not sent";
        header("Location: contact.php");
    }
}

if(isset($_POST['submitNews'])){
    $title = $_POST['title'];
    $message = $_POST['message'];
    $created_by = $_POST['createdBy'];

    $insertQuery = "INSERT INTO news (title, message, created_by) VALUES ('$title', '$message', '$created_by')";
    $queryRun = mysqli_query($connection, $insertQuery);

    if ($queryRun){
  
        echo "News added successfully";
        // to return user to the news page
        header("Location: news.php");
    }
    else {

        echo "News not added";
        header("Location: news.php");
    }
}

if(isset($_POST['submit_changes'])){
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $message = $_POST['edit_message'];
    $created_by = $_POST['edit_createdBy'];

    $query = "UPDATE news SET title = '$title', message = '$message', created_by = '$created_by' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){

        echo "<h4>News updated successfully<h4>";
        header("Location: news.php");

    }
    else {

        echo "<h4>News NOT updated<h4>";
        header("Location: news.php");

    }
}

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];


    $query = "DELETE FROM news WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<h4>Data has been deleted<h4>";
        header("Location: news.php");
    }
    else{
        echo "<h4>Data has not been deleted<h4>";
        header("Location: news.php");
    }
}

if(isset($_POST['del_msg_btn'])){
    $id = $_POST['del_msg_id'];


    $query = "DELETE FROM contact_us2 WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<h4>Data has been deleted<h4>";
        header("Location: messages.php");
    }
    else{
        echo "<h4>Data has not been deleted<h4>";
        header("Location: messages.php");
    }
}

?>