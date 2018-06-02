<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>
<?php
    include('includes/header.php');
?>
	<h1>New member</h1>

        <form role="form" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="username">
            </div>
            <div class="form-group">
                <label for="text">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Title" name="password">                
            </div>
            <button type="submit" class="btn btn-info" name="submit">Add</button>
        </form>
<?php
    include('includes/footer.php');
?>

<?php
if(isset($_POST['submit'])){
    include('db.php');
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $q = "INSERT INTO `user`(`name`, `username`, `password`) VALUES ('$name','$username', '$password')";
    $result = mysqli_query($con, $q);
    if($result == true){
        echo "done !!!";
        echo "<script>alert();</script>";
    }
    else{
        echo "<script>alert('not inserted');</script>";
        echo "data is not inserted :(";
    }
}
?>