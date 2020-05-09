<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Dumbways</title>
</head>

<body>

    <h4>Test Dumbways</h4>

    <h1>Soal 2</h1>
    <h4>Perintah :</h4>
    <p>Anda diberikan sebuah Array dengan elemen N. Buatlah sebuah function dimana
        function tersebut akan membuat array baru yang merupakan kebalikan dari array
        tersebut. (Dilarang Menggunakan fungsi reverse() bawaan).</p>

    <h4>Contoh :</h4>
    <ul>
        <li>input: [19,22,3,28,26,17,18,4,28,0]</li>
        <li>output: [0,28,4,18,17,26,28,3,22,12]</li>
    </ul>

    <h4>Jawaban :</h4>
    <small><strong>Sebelum Dibalik : </strong></small><br>
    <?php
    $arr = [19, 22, 3, 28, 26, 17, 18, 4, 28, 0];
    var_dump($arr);
    ?>
    <br><br>
    <small><strong>Setelah Dibalik : </strong></small><br>
    <?php
    function kebalikanArray($arr)
    {
        $arrBaru = [];
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            array_push($arrBaru, $arr[$i]);
        }
        var_dump($arrBaru);
    }

    kebalikanArray($arr);
    ?>

</body>

</html>