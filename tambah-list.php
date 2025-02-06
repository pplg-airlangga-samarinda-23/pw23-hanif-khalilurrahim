<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $DPS = $_POST['DPS'];
    $tank = $_POST['tank'];
    $healer = $_POST['healer'];
    $buff = $_POST['buff'];
    $debuff = $_POST['debuff'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO list (DPS, tank, healer, buff, debuff, tanggal) VALUES (?, ?, ?, ?, ?, ?)";
    $row = $koneksi->execute_query($sql, [$DPS, $tank, $healer, $buff, $debuff, $tanggal]);

    if ($row) {
        header("location:list.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah data</h1>
    <form action="" method="POST">
        <div>
            <label for="DPS">DPS</label>
            <input type="text" name="DPS" id="DPS">
        </div>
        <div>
            <label for="tank">tank</label>
            <input type="text" name="tank" id="tank">
        </div>
        <div>
            <label for="healer">healer</label>
            <input type="text" name="healer" id="healer">
        </div>
        <div>
            <label for="buff">buff</label>
            <input type="text" name="buff" id="buff">
        </div>
        <div>
            <label for="debuff">debuff</label>
            <input type="text" name="debuff" id="debuff"> 
        </div>
        <div>
            <label for="tanggal">tanggal</label>
            <input type="date" name="tanggal" id="tanggal"> 
        </div>
        <button type="submit">Enter</button>
    </form>
</body>
</html>