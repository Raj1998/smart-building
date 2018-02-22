<?php
    include('includes/header.php');
?>


    <div class="container">

        <?php
            include('includes/db.php');

            $q = "select * from alert;";
            $result = mysqli_query($con, $q);
            while($row = mysqli_fetch_array($result)){
                $title = $row['title'];
                $text = $row['text'];
                echo '<h3>'.$title.'</h3>';
                echo '<p>'.$text.'</p>';
            }
        ?>
        
    </div>

<?php
    include('includes/footer.php');
?>