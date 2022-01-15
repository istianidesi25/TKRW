<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form Edit</title>
</head>
<body>
    <h3>Form Input Data</h3> 
    
    <table>
        <form action="<?php echo base_url('Welcome/AksiEdit') ?>"></form>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>
                <input type="text" value="<?php echo $data_mhs->nim ?>"disabled>
                <input type="hidden" name="nim" id="">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id=""></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" id=""> </td>
        </tr>
    </table>

    <button>Simpan</button>
</body>
</html>