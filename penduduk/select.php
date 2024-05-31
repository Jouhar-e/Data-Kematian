<?php
$sql = "SELECT * FROM penduduk ORDER BY penduduk ASC";
$row = $db->getData($sql);

// var_dump($row);
$no = 1;
?>

<div class="row">
    <div class="col">
        <h3>Data Penduduk</h3>
    </div>
    <div class="col text-end">
        <a href="?f=penduduk&m=insert" class="btn btn-outline-secondary">Tambah Data</a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
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
                                window.location.href = "<?php echo '?f=penduduk&m=delete&id='.$key['idpenduduk'] ?>";
                            } else {
                                // Jika pengguna mengklik "Tidak"
                                window.location.href = "?f=penduduk&m=select";
                            }
                        }
                    </script>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['penduduk'] ?></td>
                        <td><?php echo $key['nik'] ?></td>
                        <td><?php echo $key['tgllahir'] ?></td>
                        <td><?php echo $key['jk'] ?></td>
                        <td><?php echo $key['alamat'] ?></td>
                        <td>
                            <a href="?f=penduduk&m=update&id=<?php echo $key['idpenduduk'] ?>" class="btn btn-outline-warning btn-sm">Ubah</a>
                            <a onclick="showConfirmation()" class="btn btn-outline-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>