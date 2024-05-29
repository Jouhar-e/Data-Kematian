<div>
    <h3>Tambah Data Penduduk</h3>
</div>
<div class="w-50 mt-3">
    <form method="post">
        <div>
            <label class="form-label" for="">Nama Penduduk</label>
            <input type="text" name="nama" placeholder="Isi Nama Penduduk" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">NIK</label>
            <input type="number" name="nik" placeholder="Isi NIK" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">Tanggal Lahir</label>
            <input type="date" name="tgllahir" placeholder="Isi Tanggal Lahir" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">Jenis Kelamin</label>
            <select name="jk" class="form-select" id="">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div>
            <label class="form-label" for="">Alamat</label>
            <input type="text" name="alamat" placeholder="Isi Alamat" class="form-control" required>
        </div>
        <div class="mt-2">
            <a href="?f=penduduk&m=select" class="btn btn-outline-info btn-sm">Batal</a>
            <input type="submit" name="simpan" value="Simpan" class="btn btn-outline-primary btn-sm" id="">
        </div>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tgllahir = $_POST['tgllahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO penduduk VALUES (NULL, '$nama', '$nik', '$tgllahir', '$jk', '$alamat')";
    // echo $sql;
    $db->exc($sql);
    header("location:?f=penduduk&m=select");
}
?>