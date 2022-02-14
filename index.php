<?php
        echo "Database Trucorp";
        $link = mysqli_connect("172.30.0.2", "root", "password", "trucorp");
        if(!$link){
            echo "Koneksi ke MySQL gagal!";
        }
        $rows = [];
        $result = $link->query("SELECT * FROM users");
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
?>
<!DOCTYPE html>
<html>
<head>
<title>2301938730 - Trucorp</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
        <?php $counter = 0?>
        <?php foreach($rows as $row):?>
        <tr>
            <td><?php echo $row["ID"]?></td>
            <td><?php echo $row["Nama"]?></td>
            <td><?php echo $row["Alamat"]?></td>
            <td><?php echo $row["Jabatan"]?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <?php echo "Total user: " . $x;?>
</body>
</html>
