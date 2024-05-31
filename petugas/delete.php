<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM petugas WHERE idpetugas = $id";
    $db->exc($sql);
    header("location:?f=petugas&m=select");
}
