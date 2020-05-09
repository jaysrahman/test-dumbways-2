<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Dumbways</title>
</head>

<body>

    <h4>Test Dumbways</h4>

    <h1>Soal 1</h1>
    <h4>Perintah :</h4>
    <p>Zizah seorang programer di suatu perusahaan, Zizah diberikan tugas untuk
        menyelesaikan suatu case dimana case tersebut terdapat sebuah string berbentuk
        CamelCase. Tugas zizah adalah untuk menghitung jumlah kata yang ada pada string
        tersebut. (Dilarang Menggunakan Build In Function).</p>

    <h4>Contoh :</h4>
    <ul>
        <li>input: mamaMakanPepayaWaktuBuka</li>
        <li>output: 5 -> terdiri dari (mama, makan, pepaya, waktu, buka)</li>
    </ul>

    <h4>Jawaban :</h4>
    <form action="" method="POST">
        <label for="kalimat"><strong>Masukkan Kalimat :</strong></label><br>
        <input type="text" name="kalimat" id="kalimat">
        <button type="submit" name="cek">Cek</button><br>
        <small><strong>Kalimat harus Camel Case</strong></small><br><br>
    </form>

    <?php
    if (isset($_POST['cek'])) {
        $cek = true;

        $kalimat = $_POST['kalimat'];

        function jumlahHuruf($string)
        {
            $tmp = '';
            $s = 0;
            while (isset($string[$s])) {
                $tmp .= $string[$s];
                $s++;
            }
            return $s;
        }

        function jumlahKata($kalimat)
        {
            $besar = "ABCDEFGHIJKLMNOPQRSTUFWXYZ";
            $kecil = "abcdefghijklmnopqrstufwxyz";

            $kata = '';
            $jumlahKata = 1;

            for ($i = 0; $i < jumlahHuruf($kalimat); $i++) {
                $ganti = false;
                for ($j = 0; $j < jumlahHuruf($besar); $j++) {
                    if ($besar[$j] === $kalimat[$i]) {
                        $kata .= ', ';
                        $kalimatGanti = $kecil[$j];
                        $kata .= $kalimatGanti;
                        $ganti = true;
                        $jumlahKata++;
                    }
                }

                if ($ganti !== true) {
                    $kata .= $kalimat[$i];
                }

                $j = 0;
                $ganti = false;
            }

            $hasil = "<strong>Kalimat : </strong>" . $kalimat
                . "<br><strong>Memiliki : </strong>" . $jumlahKata . " Kata"
                . "<br><strong>Terdiri dari : </strong>( " . $kata . " )";

            return $hasil;
        }

        for ($c = 0; $c < jumlahHuruf($kalimat); $c++) {
            if ($kalimat[$c] === " ") {
                $cek = false;
            }
        }

        if ($cek === false) {
            echo "<strong>Kalimat harus Camel Case !!!</strong>";
        } else {
            echo (jumlahKata($kalimat));
        }
    }
    ?>

</body>

</html>