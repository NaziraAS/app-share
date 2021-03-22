<font face="trebuchet MS">
<?php
        $sql = $conn->query("SELECT * FROM komentar");
        $data = $sql->fetch_assoc();
        ?>
<h1>Silak berkomentar si bagus lek bawak</h1>
<hr>
<marquee><b>"<?php echo $data['komentar']; ?>" By: <?php echo $data['nama']; ?></marquee>
</font>