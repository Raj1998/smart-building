<?php
    include('includes/header.php');
?>


<style>
    .events{
        border: 1px solid black;
    }
</style>

<?php

    include('includes/db.php');
    $q = "SELECT * FROM `events`";

    $result = mysqli_query($con, $q);

    echo '<h2>Event bookings</h2><br>';
    while($row = mysqli_fetch_array($result)){
        echo '<div class="events">';

        echo "<h4>".$row['title']."</h4>";
        echo "Details: ".$row['details'];
        echo "<br> Date: ".$row['date'];
        echo "<br> Event By: ".$row['by'];

        echo '</div>';
    }

?>


<?php
    include('includes/footer.php');
?>