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
        <h1>Atur sendiri</h1>
        <div>
            <label>Angka pertama</label> <br>
            <input name="angka1" type="number" placeholder="Jawab">
        </div>
        <br>
        <div>
            <label>Angka kedua</label> <br>
            <input name="angka2" type="number" placeholder="Jawab">
        </div>
        <div>
            <label>Mau diapain bos?</label><br>
            <input type="radio" id="kali" name="jumlah" value="kali" required>
            <label for="kali">x</label><br>
            <input type="radio" id="bagi" name="jumlah" value="bagi" required>
            <label for="bagi">:</label><br>
            <input type="radio" id="tambah" name="jumlah" value="tambah" required>
            <label for="tambah">+</label><br>
            <input type="radio" id="kurang" name="jumlah" value="kurang" required>
            <label for="kurang">-</label>
        </div>
        <br>
        <div>
            <button>Submit</button>
        </div>
    </form>
    

    <?php
        $angka1 = @$_POST['angka1'];
        $angka2 = @$_POST['angka2'];
        $jumlah = @$_POST['jumlah'];
        if($jumlah == "kali"){
            $hasil = $angka1 * $angka2;
            echo <<<hastho
            <p class= "right">
            Hasilnya adalah: $hasil <br>
            kamu pilih Kali.
            <p>
            hastho;
        }
        elseif($jumlah == "bagi"){
            $hasil = $angka1 / $angka2;
            echo <<<hastho
            <p class= "right">
            Hasilnya adalah: $hasil <br>
            kamu pilih Bagi.
            <p>
            hastho;
        }
        elseif($jumlah == "tambah"){
            $hasil = $angka1 + $angka2;
            echo <<<hastho
            <p class= "right">
            Hasilnya adalah: $hasil <br>
            kamu pilih Tambah.
            <p>
            hastho;
        }
        elseif($jumlah == "kurang"){
            $hasil = $angka1 - $angka2;
            echo <<<hastho
            <p class= "right">
            Hasilnya adalah: $hasil <br>
            kamu pilih Kurang.
            <p>
            hastho;
        }
    ?>
</body>
</html>