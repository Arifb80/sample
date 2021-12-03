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
     <h2>Syarat Masuk ke MIKO MALL</h2>   
     <form method = "POST" action= "">
     <table>
        <tr>
             <td>Nama</td>
             <td>:</td>
             <td><input type='text' name='nama'></td>
        </tr> 
        <tr>
             <td>Status Vaksin</td>
             <td>:</td>
             <td><select name='status'>
             <option>Sudah Vaksin</option>
             <option>Belum Vaksin</option>
             <option></option> 
             </select>
             </td>
        </tr>
        <tr>
             <td></td>
             <td></td>
             <td><input type="submit" name ="simpan" value='KIRIM'></td>
        </tr>
     </table>
     </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
$nama = $_POST['nama'];
$status = $_POST['status'];
if($status == "Sudah Vaksin"){
    echo "<br>";
    echo "<center>Nama Anda  : $nama </center>";
    echo "<center>Status Vaksin   : $status</center>";
    echo "<center><h1>Diizinkan</h1></center>";
}
elseif($status == "Belum Vaksin"){
    echo "<br>";
    echo "<center>Nama :$nama <br></center>";
    echo "<center>Status Vaksin   : Belum Vaksin</center>";
    echo "<br>";
    echo "<center><h1>Tidak Diizinkan</h1></center>";
    echo "<center><a href='https://www.pedulilindungi.id/'>Silahkan Daftar vaksin</a></center>";
}
else{
    echo "no";
}

}
?>