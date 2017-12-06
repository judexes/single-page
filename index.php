<?php
/**
 * Created by IntelliJ IDEA.
 * User: Black.freethinker
 * Date: 12/6/2017
 * Time: 2:18 AM
 */ ?>

<!doctype>
<html>
    <head>
        <title>CAN</title>
        <!--    Bootstrap core    -->
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
        <!--    Custom style    -->
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <div class="container-fluid bar">
            <div class="bar">
                <!-- Navigation -->
                <?php include_once 'sections/menu.php' ?>
            </div>

            <div class="main container">
                <div class="row sections">
                    <?php include_once 'sections/header.php'; ?>
                </div>
                <div class="row sections">
                    <?php include_once 'sections/quote.php'; ?>
                </div>
                <div class="row sections">
                    <?php include_once 'sections/services.php'; ?>
                </div>
                <div class="row sections">
                    <?php include_once 'sections/values.php'; ?>
                </div>
                <div class="row sections">
                    <?php include_once 'sections/clients.php'; ?>
                </div>
                <div class="row sections">
                    <?php include_once 'sections/contact.php'; ?>
                </div>
            </div>

        </div>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/js.js"></script>
    </body>
</html>
