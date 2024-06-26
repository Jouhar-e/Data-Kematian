<div class="row">
    <div class="col-md-2">
        <a href="?f=petugas&m=select" class="link-dark text-decoration-none"><h3>Data Petugas</h3></a>
    </div>
    <div class="col-md-6">
        <form action="" method="post">
            <div class="float-start">
                <input type="text" name="cari" class="form-control float-start" placeholder="Cari" id="">
            </div>
            <div class="float-start ms-3">
                <input type="submit" name="simpan" value="Cari" class="btn btn-outline-secondary">
            </div>
        </form>
    </div>
    <div class="col-md-4 text-end">
        <a href="?f=petugas&m=insert" class="btn btn-outline-secondary">Tambah Data</a>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {
    $cari = $_POST['cari'];
    
    $like = "WHERE petugas LIKE '%$cari%'";
}else {
    $like = "";
}

$sql = "SELECT * FROM petugas $like ORDER BY petugas ASC";
$row = $db->getData($sql);

// var_dump($row);
$no = 1;
?>

<div class="table-responsive">
    <table class="table table-striped mt-3">
        <thead class="text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php if (!empty($row)) : ?>
                <?php foreach ($row as $key) : ?>
                    <script type="text/javascript">
                        function showConfirmation() {
                            var userResponse = confirm("Apakah Anda yakin ingin menghapus data ini?");
                            if (userResponse) {
                                // Jika pengguna mengklik "Ya"
                                window.location.href = "<?php echo '?f=petugas&m=delete&id=' . $key['idpetugas'] ?>";
                            } else {
                                // Jika pengguna mengklik "Tidak"
                                window.location.href = "?f=petugas&m=select";
                            }
                        }
                    </script>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['petugas'] ?></td>
                        <td><?php echo $key['telp'] ?></td>
                        <td><?php echo $key['email'] ?></td>
                        <td><?php echo $key['password'] ?></td>
                        <td><?php echo $key['level'] ?></td>
                        <td class="text-center">
                            <?php if ($key['status'] == 1) {
                                echo '<a href="?f=petugas&m=status&id='.$key['idpetugas'].'" class="btn btn-outline-success btn-sm">Aktif</a>';
                            } else {
                                echo '<a href="?f=petugas&m=status&id='.$key['idpetugas'].'" class="btn btn-outline-success btn-sm">Non Aktif</a>';
                            } ?>
                        </td>
                        <td class="text-center">
                            <a href="?f=petugas&m=update&id=<?php echo $key['idpetugas'] ?>" class="btn btn-outline-warning btn-sm">Ubah</a>
                            <a onclick="showConfirmation()" class="btn btn-outline-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>