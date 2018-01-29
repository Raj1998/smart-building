<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>
<?php
    include('includes/header.php');
?>

    <h1>Helllll</h1>

<?php
    include('includes/footer.php');
?>