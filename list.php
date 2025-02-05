<?php

require 'koneksi.php';

$sql = "select * from list";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>list</title>
</head>
<body>
    <h1>Halaman LIST</h1>
    <table>
        <thead>
            <th>No</th>
            <th>DPS</th>
            <th>tank</th>
            <th>healer</th>
            <th>buff</th>
            <th>debuff</th>
            <th>tanggal</th>
            <th>tanggals</th>
            <th>alomani</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($rows as $row) : ?>
                <tr>
                    <td><?=++$no?></td>
                    <td><?=$row['DPS']?></td>
                    <td><?=$row['tank']?></td>
                    <td><?=$row['healer']?></td>
                    <td><?=$row['buff']?></td>
                    <td><?=$row['debuff']?></td>
                    <td><?=$row['tanggal']?></td>
                    <td><?=$row['tanggals']?></td>
                    <td><?=$row['alomani']?></td>
                    <td>
                        <a href="list-edit.php?id=<?=$row['id']?>">Edit</a>
                        <a href="list-hapus.php?id=<?=$row['id']?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>