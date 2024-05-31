<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql;
    $row = $db->getValue('SELECT * FROM petugas WHERE idpetugas ='.$id);

    if ($row['status'] == 1) {
        $sql = "UPDATE petugas SET status = 0 WHERE idpetugas = $id";
    }else {
        $sql = "UPDATE petugas SET status = 1 WHERE idpetugas = $id";
    }
    // echo $row['status'];
    $db->exc($sql);
    header("location:?f=petugas&m=select");
}
