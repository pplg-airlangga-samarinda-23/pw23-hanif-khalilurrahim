<?php

require 'koneksi.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $Sql = 'DELETE FROM list WHERE id=?';
    $row = $koneksi->execute_query($Sql, [$id]);

    if ($row) {
        header("location:list.php");
    }
}
?>