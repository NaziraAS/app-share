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

  <?php include_once 'nav-download.php' ?>
<font face="trebuchet MS">
  <div class="container container-body">
    <h1>Mbait Data</h1>
    <hr>
    <?php
    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
    }else{
      function bytesToSize($bytes, $precision = 2){  
        $kilobyte = 1024;
        $megabyte = $kilobyte * 1024;
        $gigabyte = $megabyte * 1024;
        $terabyte = $gigabyte * 1024;
       
        if (($bytes >= 0) && ($bytes < $kilobyte)) {
          return $bytes . ' B';
        } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
          return round($bytes / $kilobyte, $precision) . ' KB';
        } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
          return round($bytes / $megabyte, $precision) . ' MB';
        } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
          return round($bytes / $gigabyte, $precision) . ' GB';
        } elseif ($bytes >= $terabyte) {
          return round($bytes / $terabyte, $precision) . ' TB';
        } else {
          return $bytes . ' B';
        }
      }
    ?>

    <table class="table table-striped table-hover">
      <tr>
        <th>NO.</th>
        <th>ARAN FILE</th>
        <th>UKURAN FILE</th>
        <th>JENIS FILE<th>
		<th>BAIT</th>
        <th>HAPUS</th>
		<th>AKSI</th>
      </tr>
      <?php
      $sql = $conn->query("SELECT * FROM uploads ORDER BY id DESC");
      if($sql->num_rows > 0){
        $no = 1;
        while($row = $sql->fetch_assoc()){
          echo '
          <tr>
            <td>'.$no.'</td>
            <td>'.$row['file_name'].'</td>
            <td>'.bytesToSize($row['file_size']).'</td>
            <td>'.$row['file_type'].'</td>
			<td>'.$row['up_by'].'</td>
            <td><a href="uploads/'.$row['file_name'].'" class="btn btn-primary btn-sm">Download</a></td>
			<td><a href="hapus.php/uploads/'.$row['file_name'].'" class="btn btn-primary btn-sm">Hapus</a></td>
          </tr>
          ';
          $no++;
        }
      }else{
        echo '<tr><td colspan="5">Tidak ada data</td></tr>';
      }
      ?>
    </table>

    <?php
    }
    ?>
</font>

    <?php include_once 'footer.php' ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>