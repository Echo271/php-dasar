<?php 
    echo "Hello World";
    echo "<br>";
    echo "Pertemuan 4";

    $nama = "Eko";
    $nim = 1915016028;
    $ip = 3.9;

    echo "<br> Perkenalkan nama saya $nama dengan nim $nim";
    echo "<br>";
    var_dump($nama);
    var_dump($nim);
    var_dump($ip);

    $a = 10;
    $b = 2;
    $c = $a + $b;
    $d = $a - $b;

    echo "<br> $a + $b = $c";
    echo "<br> $a - $b = $d";
    echo "<br> $a * $b = ".$a * $b;
    echo "<br> $a / $b = ".$a / $b;
    echo "<br> $a % $b = ".$a % $b."<br>";

    if($a == $b){
        echo "$a dan $b bernilai sama";
    }elseif($a > $b){
        echo "$a lebih besar dari $b";
    }else {
        echo "Kedua nya tidak sama";
    }
    echo "<br>";
    
    $kelas = 'C';

    switch($kelas){
        case 'A':
            echo "Selamat datang di kelas A";
            break;
        case 'B':
            echo "Selamat Datang di kelas B";
            break;
        default:
            echo "Anda tidak sekolah";
            break;
    }
    echo "<br>";

    // for($i = 0; $i < 10; $i++){
    //     echo "Nomor $i <br>";
    // }

    // $i = 0;
    // while($i < 10){
    //     echo "Angka $i <br>";
    //     $i++;
    // }

    $mahasiswa = array('Eko', 'budi', 'Reza', 'Dedi');

    foreach($mahasiswa as $name){
        echo "$name <br>";
    }

    $mhs = array(
        'nama'=>'Eko',
        'nim'=>1915016028,
        'prodi'=>'Informatika',
        'ipk'=>3.9
    );

    echo "<br>Nama saya ".$mhs['nama']." dengan nim ".$mhs['nim']." mahasiswa jurusan ".$mhs['prodi']." dengan ipk ".$mhs['ipk'];
    var_dump($mhs['nim']);
?>

