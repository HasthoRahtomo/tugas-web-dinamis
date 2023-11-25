<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .right{
            border: 5px solid black;
            padding: 20px;
            width: 240px;
        }
    </style>
</head>
<body>
    <form method="POST" class="right">
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>NIM</label> <br>
            <input name="NIM" type="text" placeholder="Masukkan NIM">
        </div>
        <br><br>
        <div>
            <label>Nilai</label> <br>
            <input name="Nilai" type="text" placeholder="Nilai">
        </div>
        <br>
        <div>
            <label>Absen</label> <br>
            <input name="Absen" type="text" placeholder="Absen">
        </div>
        <br>
        <div>
            <button>Submit</button>
        </div>
    </form>

    <?php
        $nama = @$_POST['nama'];
        $NIM = @$_POST['NIM'];
        $Absen = @$_POST['Absen'];
        $Nilai = @$_POST['Nilai'];
        if ($Nilai >= 70 && $Absen >=15)
        {
            $status = "LULUS";
        }
        else{
            $status = "TIDAK LULUS";
        }
        echo "<br><br>";
        echo <<<hastho
        <p class= "right">
        Hai, nama saya adalah $nama, <br>
        Dengan NIM $NIM <br>
        Saya memiliki nilai $Nilai<br>
        saya bernomor absen $Absen
        <br><br>
        Dengan ini dinyatakan $status
        <p>
        hastho;
    ?>
</body>
</html>