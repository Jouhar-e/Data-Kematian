<div class="row">
    <div class="col-md-9">
        <a href="?f=beranda&m=datapenduduk" class="link-dark text-decoration-none"><h3>Data Penduduk</h3></a>
    </div>
    <div class="col-md-3">
        <form action="" method="post">
            <div class="float-start">
                <input type="text" name="cari" class="form-control float-start" placeholder="Cari" id="">
            </div>
            <div class="float-start ms-3">
                <input type="submit" name="simpan" value="Cari" class="btn btn-outline-secondary">
            </div>
        </form>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {
    $cari = $_POST['cari'];
    
    $like = "WHERE penduduk LIKE '%$cari%' AND status = 1";
}else {
    $like = "WHERE status = 1";
}

$sql = "SELECT * FROM penduduk $like ORDER BY penduduk ASC";
$row = $db->getData($sql);

// var_dump($row);
$no = 1;
?>

<div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($row)) : ?>
                <?php foreach ($row as $key) : ?>
                    <script type="text/javascript">
                        function showConfirmation() {
                            var userResponse = confirm("Apakah Anda yakin ingin menghapus data ini?");
                            if (userResponse) {
                                // Jika pengguna mengklik "Ya"
                                window.location.href = "<?php echo '?f=penduduk&m=delete&id=' . $key['idpenduduk'] ?>";
                            } else {
                                // Jika pengguna mengklik "Tidak"
                                window.location.href = "?f=penduduk&m=select";
                            }
                        }
                    </script>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['penduduk'] ?></td>
                        <td>-</td>
                        <td>-</td>
                        <td><?php echo $key['jk'] ?></td>
                        <td>-</td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>