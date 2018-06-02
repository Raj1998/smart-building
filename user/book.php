<?php
    include('includes/header.php');
?>
    <div class="container">
        <h1> Book an event </h1>
        <?php
            if(!isset($_SESSION['username1'])){
                echo "Please log in first";
            }
            else{
        ?>

        <form role="form" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="text">Details</label>
                <textarea type="text" class="form-control" id="text" name="details"></textarea>
            </div>
            <div class="form-group">
                <label for="text">Date</label>
                <input type="date" name="date">
            </div>
            <button type="submit" class="btn btn-info" name="submit">Send</button>
        </form>


        <?php
        }
        ?>
    </div>

<?php
    include('includes/footer.php');
?>

<?php
if(isset($_POST['submit'])){
    include('includes/db.php');
    $title = $_POST['title'];
    $details = $_POST['details'];
    $date = $_POST['date'];
    $user = $_SESSION['username1'];

    $q = "INSERT INTO `events`(`title`, `details`, `by`, `date`) VALUES ('$title','$details','$user','$date')";
    $result = mysqli_query($con, $q);
    if($result == true){
        echo "done !!! Your event is booked";
    }
    else{
        echo "data is not inserted :(";
        echo $date;
    }
}

?>