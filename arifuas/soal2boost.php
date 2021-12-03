<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body style="background-color:#ccfff2;" >
    <center>
     <h2>Penggajihan Karyawan</h2>
        <h2>PT. Selalu Makmur Jaya</h2>   
     <form method = "POST" action= "">
     <table>
        <tr>
             <td>Nama Bendahara</td>
             <td>:</td>
             <td><input type='text' name='nama'></td>
        </tr> 
        <tr>
             <td>Nama Pekerja</td>
             <td>:</td>
             <td><input type='text' name='namap'></td>
        </tr>
        <tr>
             <td>Jenis Kelamin</td>
             <td>:</td>
             <td><input type='radio' name='jeniskelamin' value="Laki-Laki">Laki-laki
                  <input type='radio' name='jeniskelamin' value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
             <td>Tanggal Gaji</td>
             <td>:</td>
             <td><input type='date' name='tanggalgaji'></td>
        </tr>
        <tr>
             <td>Jabatan</td>
             <td>:</td>
             <td><select name='jabatan'>
             <option>Direktur</option>
             <option>Manager</option>
             <option>Sekertaris</option> 
             <option>Karyawan</option>
             <option>OB</option> 
             </select>
             </td>
        </tr>
        <tr>
             <td>Pendidikan Terakhir</td>
             <td>:</td>
             <td><select name='pendidikanterakhir'>
             <option>SD</option>
             <option>SMP</option>
             <option>SMA</option>
             <option>S1</option> 
             <option>S2</option>
             </select>
             </td>
        </tr>
        <tr>
             <td>Status Pegawai</td>
             <td>:</td>
             <td><select name='status'>
             <option>tetap</option>
             <option>kontrak</option>
             <option></option> 
             </select>
             </td>
        </tr>
        <tr>
             <td>Lembur</td>
             <td>:</td>
             <td><input type='number' name='lembur'>Hari /Rp.20.000</td>
        </tr> 
        <tr>
             <td>Potongan BPJS</td>
             <td>:</td>
             <td><input type='number' name='potongan'></td>
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
$namap = $_POST['namap'];
$jeniskelamin = $_POST['jeniskelamin'];
$tanggalgaji = $_POST['tanggalgaji'];
$jabatan = $_POST['jabatan'];
$pendidikanterakhir = $_POST['pendidikanterakhir'];
$status = $_POST['status'];
$lembur = $_POST['lembur'];
$potongan = $_POST['potongan'];
echo "<br>";

echo "<center><h1>Struk Gaji Karyawan</h1></center><br>";
echo "*****************************************************************************************************************************************************************<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tanggal<b>   : $tanggalgaji <br>";
echo "<br>";
echo "<h3>Gaji Pokok</h3>";
echo "<br>";
echo "Nama Karyawan   : $nama <br>"; 
echo "Jenis Kelamin   : $jeniskelamin <br>";
echo "Pendidikan Terakhir   : $pendidikanterakhir <br>";
echo "Jabatan   : $jabatan <br>";



if($jabatan == "Direktur"){
    $gaji = 10000000;
    echo "Gaji : Rp.$gaji <br>";
}
elseif($jabatan== "Manager"){
    $gaji = 7500000;
    echo "Gaji : Rp.$gaji <br>";
}
elseif($jabatan == "Sekertaris"){
    $gaji = 5000000;
    echo "Gaji : Rp.$gaji <br>";
}
elseif($jabatan == "Karyawan"){
    $gaji = 3000000;
    echo "Gaji : Rp.$gaji <br>";
}
elseif($jabatan == "OB"){
    $gaji = 1500000;
    echo "Gaji : Rp.$gaji <br>";
}

echo "<h3>Tunjangan</h3>";

if($pendidikanterakhir == "SD"){
    $tunjangan = 200000;
    echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
}
elseif($pendidikanterakhir == "SMP"){
    $tunjangan = 500000;
    echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
}
elseif($pendidikanterakhir == "SMA"){
    $tunjangan = 1000000;
    echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
}
elseif($pendidikanterakhir == "S1"){
    $tunjangan = 1500000;
    echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
}
elseif($pendidikanterakhir == "S2"){
    $tunjangan = 2000000;
    echo "Tunjangan pendidikan : Rp.$tunjangan <br>";
}
else{
    echo "no";
}


$vs = $lembur * 20000;
echo "Vakasi lembur : Rp.$vs";
echo "<br>";

if($status == "tetap"){
    $status = 500000;
    echo "Bonus Status Kerja : Rp.$status";
}
elseif($status == "kontrak"){
    $status = 0;
    echo "Bonus Status Kerja : Rp.$status";
}
else{
    echo "no";
}


echo "<h3>Potongan</h3>";
$potongan = 100000;
echo "Potongan BPJS :Rp.$potongan <br>";
$totalgaji = ($gaji + $tunjangan + $vs + $status) - $potongan;
echo "Total Gaji :Rp.$totalgaji <br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Bendahara<b> : $namap";
}
?>