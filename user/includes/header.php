<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>User</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="../assets/customcss/style.css" rel="stylesheet"/>

</head>
<body>
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">User</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="payment.php">Payment</a></li>
                    <li><a href="notice.php">Notice</a></li>
                    <li><a href="book.php">Book Event</a></li>
                    <li><a href="showEvents.php">Events</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="login.php">Login</a></li> -->
                    <?php 
                        if(isset($_SESSION['username1'])){
                            echo '<li><a href="#">'.$_SESSION['username1'].'</a></li>';
                            echo '<li><a href="logout.php">Log Out</a></li>';
                        }
                        else{
                            echo '<li><a href="login.php">Log In </a></li>';
                        }	      			    
	      		    ?>
                </ul>
            </div>
        </nav>