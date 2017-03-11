<!doctype html>
<html lang=en>
    <head>
        <title>Register page</title>
        <meta charset=utf-8>
        <link rel="stylesheet" type="text/css" href="includes.css" >
        <style type="text/css">
        p.error {
            color:red;
            font-size:105;
            font-weight:bold;
            text-align:center;
        }
          </style>
          <body>
          <div id="container">
          <php include("header.php"); ?>
                <php include("nav.php"); ?>
                  <php include("info-col.php"); ?>
                      <div id="content">!--Start of the page content. -->
                          <p>
                          <?php
                          //This script performs an INSERT query that adds a record to the users table.
                          if ($_SERVER['REQUEST_METHOD'] == POST) {
                              $errors = array(); //Initialize an error array.
                              //Was the first name entered?
                              if (empty($_POST['fname'])) {
                                  $errors[] = 'You did not eneter your first name';
                              }
                              else {$fn =trim($_POST['fname']);
                              }
                              // Was the last name entered?
                              if (empty($POST['lname'])) {
                                  $errors[] ='You did not enter your last name.';
                              }
                          }

                          </p>
                      </div>



          </div>

          </body>
    </head>
</html>