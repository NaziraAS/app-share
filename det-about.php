<font face="trebuchet MS">
<?php
        $sql = $conn->query("SELECT * FROM tentang");
        $data = $sql->fetch_assoc();
        ?>
	<p>Aran Aplikasi	: <b><?php echo $data['app']; ?></b></p>
	<p>Versi			: <b><?php echo $data['ver']; ?></b></p>
	<p>Pengembang		: <b><?php echo $data['dev']; ?></b></p>
	<p>Fungsi Aplikasi	: <b><?php echo $data['fung']; ?></b></p>
</font>