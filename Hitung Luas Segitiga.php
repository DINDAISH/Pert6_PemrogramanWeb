<!DOCTYPE html>

<html>

<head>

    <title>Hitung Luas Segitiga</title>

</head>

<body>



<h2>Cara 1: Mendefinisikan Data dalam Array Secara Langsung</h2>

<?php

// Mendefinisikan array alas dan tinggi

$alas1 = array(5, 8, 10, 6, 12);

$tinggi1 = array(7, 12, 15, 9, 10);



// Menghitung luas segitiga

$luas_segitiga1 = array();

for ($i = 0; $i < count($alas1); $i++) {

    $luas = 0.5 * $alas1[$i] * $tinggi1[$i];

    $luas_segitiga1[] = $luas;

}



// Menampilkan hasil

for ($i = 0; $i < count($luas_segitiga1); $i++) {

    echo "Luas segitiga ke-" . ($i+1) . ": " . $luas_segitiga1[$i] . "<br>";

}

?>



<h2>Cara 2: Menggunakan Input Melalui Form</h2>

<form method="post">

    <?php

    // Input data alas dan tinggi

    for ($i = 0; $i < 5; $i++) {

        echo "Alas segitiga ke-" . ($i+1) . ": <input type='text' name='alas[]'><br>";

        echo "Tinggi segitiga ke-" . ($i+1) . ": <input type='text' name='tinggi[]'><br>";

    }

    ?>

    <input type="submit" value="Hitung">

</form>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data alas dan tinggi dari form

    $alas2 = $_POST['alas'];

    $tinggi2 = $_POST['tinggi'];



    // Menghitung luas segitiga

    $luas_segitiga2 = array();

    for ($i = 0; $i < count($alas2); $i++) {

        $luas = 0.5 * $alas2[$i] * $tinggi2[$i];

        $luas_segitiga2[] = $luas;

    }



    // Menampilkan hasil

    for ($i = 0; $i < count($luas_segitiga2); $i++) {

        echo "Luas segitiga ke-" . ($i+1) . ": " . $luas_segitiga2[$i] . "<br>";

    }

}

?>



</body>

</html>

