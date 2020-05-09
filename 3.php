<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Dumbways</title>
</head>

<body>

    <h4>Test Dumbways</h4>

    <h1>Soal 3</h1>
    <h4>Perintah :</h4>
    <p>Buatlah function untuk mencetak gambar (Gambar soal ada di lembar soal), yang mempunyai
        sebuah parameter sebagai panjang lebar/tinggi gambar. Parameter harus merupakan
        bilangan ganjil:</p>

    <h4>Contoh :</h4>
    <p>cetak_gambar(5);
        Maka akan dihasilkan (Gambar soal ada di lembar soal)</p>

    <h4>Jawaban :</h4>
    <form action="" method="POST">
        <label for="panjang"><strong>Masukkan Panjang :</strong></label><br>
        <input type="text" name="panjang" id="panjang">
        <button type="submit" name="cetak">Cetak</button><br>
        <small><strong>Angka harus ganjil</strong></small><br>
    </form>

    <h4>Hasil :</h4>
    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        function cetak_gambar($panjang)
        {
            for ($i = 1; $i <= $panjang; $i++) {
                for ($j = $panjang; $j >= $i; $j--) {
                    echo "&nbsp";
                }
                for ($k = $panjang; $k >= 1; $k--) {
                    echo "* ";
                }
                echo "<br>";
            }
        }

        if (intval($panjang) % 2 == 0) {
            echo "<h4>Angka Harus Ganjil !!!";
        } else {
            cetak_gambar($panjang);
        }
    }
    ?>

</body>

</html>