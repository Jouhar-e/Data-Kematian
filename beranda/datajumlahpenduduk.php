<?php
$sql = "SELECT * FROM penduduk";
$count = $db->getCount($sql);
// echo $count;
?>

<div class="bg-light text-center shadow rounded">
    <div class="p-3">
        <h1 class="mt-3"><?php echo $count ?></h1>
        <h3>Total Jumlah Penduduk</h3>
        <div class="text-end mt-2 mb-2">
            <a href="?f=beranda&m=datapenduduk" class="btn btn-primary btn-sm">Details</a>
        </div>
    </div>
</div>
