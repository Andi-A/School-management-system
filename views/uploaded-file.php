<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>

<html>

<head>

</head>

<body>
  <button><a href="../student_dashboard.php">Go Back To Home Page</a></button>
</body>



<center>

  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == "notsupported") {
      echo "<h2 id = 'f'>You cannot add this type of file</h2>";
    }
    if ($_GET['error'] == "fileerror") {
      echo "<h2 id = 'f' >File error</h2>";
    }

    if ($_GET['error'] == "uploaderror") {
      echo "<h2 id = 'f'>Failed to upload error</h2>";
    }
    if ($_GET['error'] == "success") {
      echo "<h2 id = 's'>File is uploaded</h2>";
    }
  }
  ?>
</center>

<style>
#s {
  color: green;
  text-decoration: underline;
}

#f {
  color: green;
  text-decoration: underline;
}
</style>

</html>