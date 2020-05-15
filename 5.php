<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>

<body>

</body>
<form action="" method="POST">
    <label for="angka"><strong>Masukkan Angka :</strong></label><br>
    <input type="num" name="angka" id="angka">
    <button type="submit" name="cek">Cek</button><br>
</form>
<?php
if (isset($_POST['cek'])) {
    $angka = $_POST['angka'];
    function cetakPrima($angka)
    {
        for ($i = 1; $i <= $angka; $i++) {
            $a = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $a++;
                }
            }
            if ($a == 2) {
                echo $i . ', ';
            }
        }
    }
    cetakPrima($angka);
}
?>

</html>