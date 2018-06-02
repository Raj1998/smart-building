
<?php
    include('includes/header.php');
?>

    <div class="container">
        <h1> Welcome... To Smart Building<?php //username will be here ?> </h1>
        <?php
            if(isset($_SESSION['username1'])){
                echo $_SESSION['uname'];
            }
        ?>
    </div>

<?php
    include('includes/footer.php');
?>