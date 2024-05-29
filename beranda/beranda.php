<style>
    .more-content {
        display: none;
    }

    .more-link {
        color: blue;
        cursor: pointer;
        text-decoration: underline;
    }
</style>
<script type="text/javascript">
    function toggleContent() {
        var moreContent = document.getElementById("moreContent");
        var moreLink = document.getElementById("moreLink");

        if (moreContent.style.display === "none") {
            moreContent.style.display = "inline";
            moreLink.innerText = "Lihat Lebih Sedikit";
        } else {
            moreContent.style.display = "none";
            moreLink.innerText = "Lihat Selengkapnya";
        }
    }
</script>
<div class="text-center ">
    <br>
    <img src="image/naruto 2.jpg" class="rounded-circle mx-auto d-block" alt="..." style="width: 20%;">
    </br>
    <div class="text-center">
        <figure>
            <blockquote class="blockquote">
                <h1>CATATAN KEMATIAN</h1>
            </blockquote>
            <figcaption class="">
                J - W - S - M <br><cite title="Source Title">Jouhar - Wahyu - Sulis - Mulyadi</cite>
            </figcaption>
            <div>
                <p>
                    Ini adalah contoh konten sebagian besar teksnya akan disembunyikan. Bagian pertama dari konten akan selalu terlihat.
                    <span id="moreContent" class="more-content">
                        Bagian kedua dari konten akan disembunyikan dan hanya akan muncul ketika pengguna mengklik 'Lihat Selengkapnya'.
                        Ini adalah bagian kedua dari konten. Anda bisa memasukkan informasi tambahan, cerita panjang, atau apapun yang Anda inginkan di sini.
                        Konten ini akan diperpanjang lebih jauh untuk menunjukkan bagaimana fungsi 'Lihat Selengkapnya' bekerja.
                    </span>
                    <span id="moreLink" class="more-link" onclick="toggleContent()">Lihat Selengkapnya</span>
                </p>
            </div>
        </figure>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?php include 'diagram_jenis_kelamin.php'; ?>
        </div>
        <div class="col-md-4">
            <?php include 'diagram_usia.php'; ?>
        </div>
        <div class="col-md-4">
            <?php include 'diagram_angka_kematian.php'; ?>
        </div>
    </div>
</div>