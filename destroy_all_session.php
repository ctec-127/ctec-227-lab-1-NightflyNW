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
<h1>Destroy All Sessions</h1>
    <div>
        <?php
        // destroy the session
        session_destroy();
        echo "The session is destroyed"
        ?>
    </div>
    <div class="container">
        <h2>Other Session Pages</h2>
        <a class="btn btn-primary btn-lg" href="create_session.php" role="button">Create Session</a><br>
        <a class="btn btn-primary btn-lg" href="read_session.php" role="button">Read Session</a><br>
        <a class="btn btn-primary btn-lg" href="destroy_session.php" type="button">Destroy Session</a><br>
        
        
    </div>


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
