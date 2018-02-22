<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>
<?php
    include('includes/header.php');
?>


<?php

    include('db.php');
    $q = 'SELECT * FROM `payment` GROUP BY u_id HAVING timediff(next_payment_date, now()) < 0';

    $result = mysqli_query($con, $q);

    echo '<h2>Who didn\'t paid maintenace of this month.</h2><br>';
    while($row = mysqli_fetch_array($result)){
        echo $row['u_id'];
    }

?>


<?php
    include('includes/footer.php');
?>