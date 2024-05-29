<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM penduduk WHERE idpenduduk = $id";
    $db->exc($sql);
    header("location:?f=penduduk&m=select");
}
