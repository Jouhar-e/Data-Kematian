<div>
    <h3>Tambah Data Petugas</h3>
</div>
<div class="w-50 mt-3">
    <form method="post">
        <div>
            <label class="form-label" for="">Nama Petugas</label>
            <input type="text" name="nama" placeholder="Isi Nama Petugas" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">Telp</label>
            <input type="number" name="telp" placeholder="Isi Telp" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">Email</label>
            <input type="email" name="email" placeholder="Isi Email" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">Password</label>
            <input type="password" name="pass" placeholder="Isi Password" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">Ulangi Password</label>
            <input type="password" name="upass" placeholder="Isi Password Sekali Lagi" class="form-control" required>
        </div>
        <div>
            <label class="form-label" for="">Level</label>
            <select name="level" class="form-select" id="">
                <option value="Petugas">Petugas</option>
                <option value="Admin">Admin</option>
            </select>
        </div>
        <div class="mt-2">
            <a href="?f=petugas&m=select" class="btn btn-outline-info btn-sm">Batal</a>
            <input type="submit" name="simpan" value="Simpan" class="btn btn-outline-primary btn-sm" id="">
        </div>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $upass = $_POST['upass'];
    $level = $_POST['level'];

    if ($upass == $pass) {
        $sql = "INSERT INTO petugas VALUES (NULL, '$nama', '$telp', '$email', '$pass', '$level', 1)";
        // echo $sql;
        $db->exc($sql);
        header("location:?f=petugas&m=select");
    }else {
        $db->getAlert("Password Tidak Sama");
    }
}
?>