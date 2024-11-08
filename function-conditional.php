<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3>Soal No 1 Greetings</h3>";

    // Soal No 1
    function greetings($name) {
        echo "Halo $name, Selamat Datang di Garuda Cyber Institute!";
    }

    greetings("Bagas");
    echo "<br>";
    greetings("Wahyu");
    echo "<br>";
    greetings("nama peserta");

    echo "<br><br><h3>Soal No 2 Reverse String</h3>";

    // Soal 2
    function reverseString($str) {
        $reversed = '';
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        return $reversed;
    }

    echo reverseString("nama peserta") . "<br>";
    echo reverseString("Garuda Cyber Institute") . "<br>";
    echo reverseString("We Are GC-Ins Developer") . "<br>";

    echo "<br><h3>Soal No 3 Palindrome</h3>";

    // Soal 3
    function palindrome($str) {
        return $str === reverseString($str) ? "true" : "false";
    }

    echo palindrome("civic") . "<br>";
    echo palindrome("nababan") . "<br>";
    echo palindrome("jambaban") . "<br>";
    echo palindrome("racecar") . "<br>";

    echo "<br><h3>Soal No 4 Tentukan Nilai</h3>";

    // Soal 4
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }

    echo tentukan_nilai(98) . "<br>"; 
    echo tentukan_nilai(76) . "<br>"; 
    echo tentukan_nilai(67) . "<br>"; 
    echo tentukan_nilai(43) . "<br>"; 
    ?>
</body>
</html>
