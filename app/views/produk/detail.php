<div class="container-mt-5">

    <div class="col-lg-10">
        <?php
        if (isset($data['produk'])) {
        ?>
            <div class="card">
                <div class="card-header">
                    Detail Data Customer
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $data['produk']['namaProduk'] ?></p>
                        <footer class="blockquote-footer"> Harga Produk : <cite title="Source Title"><?= $data['produk']['hargaProduk'] ?></cite></footer>
                        <footer class="blockquote-footer"> Satuan Produk: <cite title="Source Title"><?= $data['produk']['satuanProduk'] ?></cite></footer>
                    </blockquote>
                </div>
            </div>
        <?php } ?>
    </div>
    <br>
    <p class="ml-3">
        <button class="alert alert-danger revisiDataProduk" data-id="<?= $data['produk']['idProduk'];?>"type="button" data-bs-toggle="collapse" data-bs-target="#ubahProduk" aria-expanded="false" aria-controls="collapseExample">
            Revisi Data Produk
        </button>
        <?php
        session_start();
        ?>
        <a class="alert alert-info text-decoration:none;" href= "<?= BASE_URL ?>/produk"type="button">
            Kembali
        </a>
    </p>
    <!--Ubah Data Customer COllapse -->
    <div class="collapse" id="ubahProduk">
        <br>
        <div class="col-lg-9">
            <?php
            session_start();
            ?>
            <form action="<?= BASE_URL ?>/produk/ubah" method="POST" class="ubahDataProduk">
                <input type="hidden" name="idProduk" id="idProduk">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formLabelNama">Nama</label>
                    <input type="text" class="form-control" id="namaProduk" name="namaProduk" aria-describedby="emailHelp" placeholder="Maksimal 15 Kata..." autocomplete="off" value="">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNumber" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="ex. 628123456789" autocomplete="off" value="">
                    <div id="emailHelp" class="form-text">Pastikan Nomor Telepon Sesuai Dan Tidak Ada Redudansi.</div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="satuanProduk" name="satuanProduk" placeholder="ex. 628123456789" autocomplete="off" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="kategoriProduk" name="kategoriProduk" placeholder="ex. 628123456789" autocomplete="off" value="">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
    <!--Akhir-->
</div>  