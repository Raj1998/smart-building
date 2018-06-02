<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>
<?php
    include('includes/header.php');
?>
	<h1>Send Notice</h1>

        <form role="form" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="text">Alert</label>
                <textarea type="text" class="form-control" id="text" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-info" name="submit">Send</button>
        </form>
<?php
    include('includes/footer.php');
?>

<?php
if(isset($_POST['submit'])){
    include('db.php');
    $title = $_POST['title'];
    $text = $_POST['text'];

    $q = "INSERT INTO `alert`(`title`, `text`) VALUES ('$title','$text')";
    $result = mysqli_query($con, $q);
    if($result == true){
        echo "done !!!";
    }
    else{
        echo "data is not inserted :(";
    }
}
?>