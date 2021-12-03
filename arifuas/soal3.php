<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#ccfff2;">
    <center>
        <h1>Form Pengulangan</h1>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>1. Deret Bilangan Ganjil</td>
                </tr>
                <tr>
                    <td>2. Segitiga Sama Kaki Terbalik</td>
                </tr>
                <tr>
                    <td>3. Deret Bilangan Kelipan 3</td>
                </tr>
                <tr>
                    <td>Pilih</td>
                    <td>:</td>
                    <td><input type="text" name="pilih"></td>
                </tr>

                <tr>
                    <td>Masukan Angka</td>
                    <td>:</td>
                    <td><input type="number" name="no"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name ="simpan" value="KIRIM"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<br>
<br>
<br>
<?php
if (isset($_POST["simpan"])) {
    $pilih = $_POST['pilih'];
    $no = $_POST['no'];

    echo "<center>";
    if ($pilih == 1) {
        echo "<h4>Deret Bilangan Ganjil</h4>";
        echo "<br>";
        for ($i = 1; $i <= $no; $i += 2) {
            echo "$i <br>";
        }
    } elseif ($pilih == 2) {
        echo "<h4>Segitiga Sama Kaki Terbalik</h4>";
        echo "<br>";
        for ($i = 1; $i <= $no; $i++) {
            for ($a = 1; $a <= $i; $a++) {
                echo "";
            }
            for ($s = $no; $s >= $i; $s -= 1) {
                echo "*";
            }
            echo "<br>";
        }
    } elseif ($pilih == 3) {
        echo "<h4>Deret Bilangan Kelipatan 3</h4>";
        echo "<br>";
        for ($i = 3; $i <= $no; $i += 3) {
            echo "$i <br>";
        }
    } else {
        echo "Tidak Tersedia";
    }
}
?>