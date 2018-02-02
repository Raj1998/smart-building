<?php
    include('includes/header.php');
    include('includes/db.php');

    $q = "select * from alert;";
    $result = mysqli_query($con, $q);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <style>
    h3{
        background-color:grey;
        padding:5px;
        border-radius:5px;
        
    }
</style>
</body>
</html>

    <div class="container">

        <?php
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