<?php
include "config.php";
//coding hapus
$a="delete from download where id='$_GET[id]'";
$b=mysqli_query($koneksi,$a);
	if($b){
	header("location:download.php");
	}else{
	echo "Data gagal dihapus";
	}
?>