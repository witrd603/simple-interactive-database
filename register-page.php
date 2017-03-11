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
                                    else {$ln =trim($_POST['lname']);
                          }
                          //Was an email address entered?
                                   if (empty($POST['email'])) {
                                  $errors[] ='You did not enter your email address.';
                                  }
                                     else {$ln =trim($_POST['email']);
                                     }
                                     //Did the two passwords match?
                                        if (!empty($POST['psword1'])) {
                                            if ($_POST['psword1'] !=$POST['psword2'])  {
                                                   $errors[] ='Your passwords where not the same.';
                                            }
                                                 else {$p =trim($_POST['psword1']);
                                  }
                                  }
                                  //Start of the SUCCESFUL SECTION. i.e. all the fields were filled out
                                  if (empty($errors)) {//if no problems encountered, register user in the database
                                  require ('mysqli_connect.php');//Connect to the database.
                                  //Make the query
                                  $q = "INSERT INTO users (user_id, fname, lname, email, psword, registration_date)
                                  VALUES (' ', '$fn', '$ln', '$e', '$SHA1('$p'), NOW() )";
                                  $result= @mysqli_query($dbcon, $q); // Run the query.
                                  if ($result) {// If it ran OK.
                                  ...header ("location: register-thanks.php");
                                  exit();
                                  //End of SUCCESFUL SECTION}}


                          </p>
                      </div>



          </div>

          </body>
    </head>
</html>