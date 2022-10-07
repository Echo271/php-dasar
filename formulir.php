<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <h3>Pendaftaran Mahasiswa Baru</h3>
    <form action="tampil.php" method="get">
        <label for="">Nama Lengkap : </label>
        <input type="text" name="nama"><br>
        <label for="">Tanggal Lahir : </label>
        <input type="date" name="tl"><br>
        <label for="">Email : </label>
        <input type="email" name="email" required><br>
        <label for="">Password : </label>
        <input type="password" name="pwd" required><br>
        <input type="submit" name="kirim">
    </form>

</body>
</html>