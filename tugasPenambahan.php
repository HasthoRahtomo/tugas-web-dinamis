<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .right{
            border: 5px solid black;
            padding: 20px;
            width: 220px;
        }
    </style>
</head>
<body>
    <form method="POST" class="right">
        <h1>Penambahan</h1>
        <div>
            <label>Angka pertama</label> <br>
            <input name="angka1" type="number" placeholder="Jawab">
        </div>
        <br>
        <div>
            <label>Angka kedua</label> <br>
            <input name="angka2" type="number" placeholder="Jawab">
        </div>
        <br>
        <div>
            <button>Submit</button>
        </div>
    </form>
    

    <?php
        $angka1 = @$_POST['angka1'];
        $angka2 = @$_POST['angka2'];
            $hasil = $angka1 + $angka2;
            echo <<<hastho
            <p class= "right">
            Hasilnya adalah: $hasil <br>
            kamu pilih Tambah.
            <p>
            hastho;
    ?>
</body>
</html>