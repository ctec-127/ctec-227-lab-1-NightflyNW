<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Scott Altom
    CTEC 227
    Lab 1 - Sessions -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Scott Altom - CTEC-227 - Lab 1 - Sessions</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>
    <h1>Create a session</h1>
  <div>
    <?php
    echo "You have created a session";
    //isset function here
    if(!isset($_SESSION["views"])){
        $_SESSION["views"] = 0;
    }
    if(!isset($_SESSION["browser"])){
        $_SESSION["browser"] = "Chrome/74.0.3729.157";
    }
    if(!isset($_SESSION["role"])){
        $_SESSION["role"] = "admin";
    }
    
    $_SESSION["views"] += 1;

    echo '<p>Views: ' . $_SESSION['views'] . '</p>';
    echo '<p>Browser: ' . $_SESSION['browser'] . '</p>';
    echo '<p>Role: ' . $_SESSION['role'] . '</p>';

    // // Set Session Variables
    // $_SESSION["views"] = 0;
    // $_SESSION["browser"] = "Chrome/74.0.3729.157";
    // // $useragent = $_SERVER ["HTTP_USER_AGENT"];
    // // echo "<b>Your User Agent is</b>: " . $useragent;
    // //$_SERVER ["HTTP_USER_AGENT"] = " ";
    // $_SESSION ["role"] = "admin";
    ?>

    </div>
        <div class="container">
            <h2>Other Session Pages</h2>
            
            <a class="btn btn-primary btn-lg" href="read_session.php" role="button">Read Session</a><br>
            <a class="btn btn-primary btn-lg" href="destroy_session.php" type="button">Destroy Session</a><br>
            <a class="btn btn-primary btn-lg" href="destroy_all_session.php" role="button">Destroy All Session</a>
            
        </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Scott Altom 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
