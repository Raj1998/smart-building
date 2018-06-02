<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>
<?php
    include('includes/header.php');
?>

    <h1>Welcome to admin area</h1>

<?php
    include('includes/footer.php');
?>