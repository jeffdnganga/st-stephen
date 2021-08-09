<?php
include('includes/header.php');
include('includes/info.php');
include('includes/navigation.php');
include('dbconnect.php');
?>
<div class="container">
    <table class="news-table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Message</th>
        <th scope="col">Created at</th>
        <th scope="col">Created by</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $readTable = "SELECT * FROM news";
        $executeRead = mysqli_query($connection, $readTable);

        if(mysqli_num_rows($executeRead) > 0){
            while($news = mysqli_fetch_assoc($executeRead)){
                echo "<tr>";
                    echo "<td>" . $news['id'] . "</td>";
                    echo "<td>" . $news['title'] . "</td>";
                    echo "<td>" . substr($news['message'], 0, 100) . "... </td>";
                    echo "<td>" . $news['created_at'] . "</td>";
                    echo "<td>" . $news['created_by'] . "</td>";
                    echo '<td>
                            <form action="edit-news.php" method="post">
                                <input type="hidden" name="edit_id" value=" ' . $news['id'] . ' ">
                                <button class="btn btn-success" type="submit" name="edit_button">Edit</button>
                            </form>
                        </td>';
                    echo '<td>
                            <form action="code.php" method="post">
                                <input type="hidden" name="delete_id" value=" ' . $news['id'] . ' ">
                                <button class="btn btn-danger" type="submit" name="delete_btn">Delete</button>
                            </form>
                        </td>';
                echo "</tr>";
            }
        }

        ?>
    </tbody>
    </table>
</div>


<?php

include('includes/scripts.php');

?>