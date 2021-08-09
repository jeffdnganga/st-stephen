<?php
include('includes/header.php');
include('dbconnect.php');
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
// query for reading the data in contact_us2 table
    $readTable = "SELECT * FROM contact_us2"; 
    $executeRead = mysqli_query($connection, $readTable);
    // code for checking is the rows are grater than zero and displaying all data in that table if the rows are greater than zero 
    if(mysqli_num_rows($executeRead) > 0){
        while($messages = mysqli_fetch_assoc($executeRead)){
            echo "<tr>";
              echo "<td>" . $messages['id'] . "</td>";
              echo "<td>" . $messages['name'] . "</td>";
              echo "<td>" . $messages['email'] . "</td>";
              echo "<td>" . $messages['subject'] . "</td>";
              echo "<td>" . $messages['message'] . "</td>";
              echo "<td>" . $messages['created_at'] . "</td>";
              echo '<td>
                <form action="code.php" method="post">
                    <input type="hidden" name="del_msg_id" value=" ' . $messages['id'] . ' ">
                    <button class="btn btn-danger" type="submit" name="del_msg_btn">Delete</button>
                </form>
              </td>';
            echo "</tr>";
        }
    }

    ?>
  </tbody>
</table>
<h2>Number or records: <?php echo mysqli_num_rows($executeRead) ?></h2>

<?php

include('includes/scripts.php');

?>