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

  <?php include_once 'nav-profile.php' ?>
<font face="trebuchet MS">
  <div class="container container-body">
  <?php
        $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
        $data = $sql->fetch_assoc();
        ?>
    <h1>Halo <?php echo $data['nama']; ?>! Mangkin niki data profil side.</h1>
    <hr>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
		<img src="images/default.png" align="center" width="30%"></img>
		<br/>
        <?php
        $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
        $data = $sql->fetch_assoc();
        ?>
        <table class="table">
          <tr>
            <th>USERNAME</th><th>:</th><td><?php echo $data['username']; ?></td>
          </tr>
          <tr>
            <th>TGL. BEDAFTAR</th><th>:</th><td><?php echo $data['tgl_daftar']; ?></td>
          </tr>
          <tr>
            <th>ARAN LENGKAP</th><th>:</th><td><?php echo $data['nama']; ?></td>
          </tr>
          <tr>
            <th>EMAIL</th><th>:</th><td><?php echo $data['email']; ?></td>
          </tr>      
        </table>
      </div>
    </div>
</font>
    <?php include_once 'footer.php' ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>