<?php 
        if(isset($_GET['kirim'])){
            $nama = $_GET['nama'];
            $tanggal = $_GET['tl'];
            $email = $_GET['email'];
            $password = $_GET['pwd'];

            echo "<br>Nama : $nama";
            echo "<br>Tanggal Lahir : $tanggal";
            echo "<br>Email : $email";
        }
?>