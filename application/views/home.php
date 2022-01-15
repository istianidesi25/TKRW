<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Website</title>
</head>
<body>
    <h1>CRUD di Frameworks</h1>
    <h3>(Data Mahasiswa)</h3>

    <button onclick="document.location.href='<?php echo base_url('Welcome/formInput/') ?>' ">Tambah Mahasiswa</button>
    <table>
        <tr>
            
            <td><b>No.</b></td>
            <td><b>NIM</b></td>
            <td><b>Nama</b></td>
            <td><b>Jurusan</b></td>
            <td><b>Aksi</b></td>
        </tr>
        <?php
            $count = 0;
            foreach($data_mhs as $row){
                $count = $count + 1;
                
        ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row->nim ?></td>
            <td><?php echo $row->nama ?></td>
            <td><?php echo $row->jurusan ?></td>
            <td><a href="<?php echo base_url('Welcome/formEdit/'). $row->nim ?>">Edit</a><a href="">Delete</a></td>
        </tr>
        
        <?php } ?>
    </table>
    
  

</body>
</html>