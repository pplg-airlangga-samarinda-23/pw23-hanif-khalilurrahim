<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM list WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
}  elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $DPS = $_POST['DPS'];
    $tank = $_POST['tank'];
    $healer = $_POST['healer'];
    $buff = $_POST['buff'];
    $debuff = $_POST['debuff'];
    $tanggal = $_POST['tanggal'];
    $id = $_GET['id'];

    $sql = 'UPDATE list SET DPS=?, tank=?, healer=?, buff=?, debuff=?, tanggal=? WHERE id=?';
    $row = $koneksi->execute_query($sql, [$DPS, $tank, $healer, $buff, $debuff, $tanggal, $id]);

    if ($row) {
        header("location:list.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
</head>
<body>
    <h1>Edit Data</h1>
    
    <form action="" method="POST">
        <div>
            <label for="DPS">DPS</label>
            <input type="text" name="DPS" id="DPS" value="<?=$row['DPS']?>">
        </div>
        <div>
            <label for="tank">tank</label>
            <input type="text" name="tank" id="tank" value="<?=$row['tank']?>">
        </div>
        <div>
            <label for="healer">healer</label>
            <input type="text" name="healer" id="healer" value="<?=$row['healer']?>">
        </div>
        <div>
            <label for="buff">buff</label>
            <input type="text" name="buff" id="buff" value="<?=$row['buff']?>">
        </div>
        <div>
            <label for="debuff">debuff</label>
            <input type="text" name="debuff" id="debuff" value="<?=$row['debuff']?>">
        </div>
        <div>
            <label for="tanggal">tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="<?=$row['tanggal']?>">
        </div>
        <button type="submit">Enter</button>
    </form>
</body>
</html>