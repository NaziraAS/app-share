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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-filestyle.min.js"></script>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <?php include_once 'nav-upload.php' ?>
<font face="trebuchet MS">
  <div class="container container-body">
    <h1>Tamak File</h1>
    <hr>
    <?php
    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Login juluk munda mele tama aplikasi nike.</div>';
    }else{
    ?>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-10">
              <input type="file" name="myFile" class="filestyle" data-icon="false">
            </div>
            <div class="col-md-2">
              <input type="submit" name="upload" class="btn btn-primary" value="Tamak">
            </div>
          </div>
        </form>

        <?php
        // definisi folder upload
        define("UPLOAD_DIR", "uploads/");

        if (!empty($_FILES["myFile"])) {
          $myFile = $_FILES["myFile"];
          $ext    = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
          $size   = $_FILES["myFile"]["size"];
          $tgl   = date("Y-m-d");

          if ($myFile["error"] !== UPLOAD_ERR_OK) {
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }

          // filename yang aman
          $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

          // mencegah overwrite filename
          $i = 0;
          $parts = pathinfo($name);
          while (file_exists(UPLOAD_DIR . $name)) {
            $i++;
            $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
          }

          // upload file
          $success = move_uploaded_file($myFile["tmp_name"],
            UPLOAD_DIR . $name);
          if (!$success) { 
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }else{

            $insert = $conn->query("INSERT INTO uploads(tgl_upload, file_name, file_size, file_type) VALUES('$tgl', '$name', '$size', '$ext')");
            if($insert){
              echo '<div class="alert alert-success">File berhasil te tamak.</div>';
            }else{
              echo '<div class="alert alert-warning">Gagal namak file.</div>';
              exit;
            }
          }

          // set permisi file
          chmod(UPLOAD_DIR . $name, 0644);
        }
        ?>

      </div>
    </div>

    <?php
    }
    ?>
</font>

    <?php include_once 'footer.php' ?>

</body>
</html>