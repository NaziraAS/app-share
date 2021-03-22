<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once 'judul.php' ?>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <?php include_once 'nav-about.php' ?>
<font face="trebuchet MS">
  <div class="container container-body">
    <h1>Tentang Aplikasi</h1>
    <hr>
    <?php include_once 'det-about.php' ?>
</font>
    <?php include_once 'footer.php' ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>