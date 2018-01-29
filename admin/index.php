<?php session_start();
if (isset($_SESSION['username'])) {
    # code...
    header('location: home.php');
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/bootstrap.css" />
</head>
<body>
    <section class="panel">
        <div class="panel-body">
            <div class="position-center">
                <form role="form" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>                    
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                </form>
            </div>

        </div>
    </section>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    include('db.php');
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $q = "select * from login where username='$name' && password='$pass';";
    $result = mysqli_query($con, $q);
    $n = mysqli_num_rows($result);

    if($n == 1){
        $_SESSION['username'] = $name;
        header('location: home.php');
    }
    else{
        echo 'something went wrong';
        session_destroy();
    }

}
?>