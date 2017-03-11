﻿<!DOCTYPE html>
<html lang=en>

<head>
    <title>Template for an interactive web page</title>
    <meta charset=utf-8>
    <link rel="stylesheet" type="text/css" href="includes.css">
</head>
 <body>
    <div id='container'>
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>
        <?php include('info-col.php'); ?>
        <div id='content'>
            <!--Start of page content.-->
            <p> The home page content.

            </p>
            <!--End of the home page content.-->
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>