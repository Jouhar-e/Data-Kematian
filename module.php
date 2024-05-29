<?php

class DB
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $pass = "";
    private $database = "data-kematian";
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = $this->koneksiDB();
    }

    public function koneksiDB()
    {
        $koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        return $koneksi;
    }


    // untuk menampilkan data
    public function getData($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        if (!empty($data)) {
            return $data;
        }
    }

    // untuk mengambil data percolum
    public function getValue($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    // untuk menampilkan jumlah data
    public function getCount($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }

    // untuk mengeksekusi query
    public function exc($sql)
    {
        $result =  mysqli_query($this->koneksi, $sql);
    }

    function dialog($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    function confirmAction($message, $y, $n)
    {
        echo "<script>";
        echo "function confirmAlert() {";
        echo '  if (confirm("' . $message . '")) {';
        echo '   ' . $y . ';';
        echo "  } else {";
        echo '    ' . $n . ';';
        echo "  }";
        echo "}";
        echo "</script>";
        echo '<button onclick="confirmAlert()">Konfirmasi</button>';
    }
}
