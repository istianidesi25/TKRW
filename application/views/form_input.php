<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
    <h3>Form Input Data</h3> 
    
    <table>
        <form action="<?php echo base_url('Welcome/AksiInsert')?>" method="post"></form>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" id="" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="" required></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" id="" required></td>
        </tr>
        <form>
    </table>

    <button>Simpan</button>
</body>
</html>