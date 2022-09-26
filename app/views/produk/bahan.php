<div class="container-mt-5">
    <div class="row">
        <?php
        Flasher::flash();
        ?>
    </div>
    <p class="ml-3">
        <?php
        if ($_SESSION['level'] == 1) {
        ?>

            <a class="btn btn-primary" type="button" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-plus-circle mr-2"></i>Tambah Data Produk
        </a>
        <?php
        }
        ?>
        <a class="btn btn-secondary" href="<?= reload ?>">
        <i class="fas fa-sync-alt mr-2"></i>Reload
    </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="col-lg-4">
            <div class="alert alert-success" role="alert"><i class="fas fa-file-invoice"></i>
                Form Pengisian Produk Khusus Digital Print
            </div>
        </div>
        <br>
        <div class="col-lg-10">
            <form action="<?= BASE_URL ?>/Produk/tambah" method="POST" class="tambahDataProduk">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" name="namaProduk" aria-describedby="emailHelp" placeholder="Maksimal 15 Kata..." autocomplete="off">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNumber" class="form-label">Harga Produk</label>
                    <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Rp. 16000" autocomplete="off">
                    <div id="emailHelp" class="form-text">Pastikan Harga Sesuai.</div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="satuanProduk" name="satuanProduk" placeholder="Kategori Customer" autocomplete="off" value="Meter">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="kategoriProduk" name="kategoriProduk" placeholder="Kategori Customer" autocomplete="off" value="Digital Print">
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Simpan</button>
            </form>
        </div>
    </div>
    <div class="row ml-2 mt-5">
        <div class="col-lg-10">
            <table id="tableData" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Bahan</th>
                        <th>Stok Bahan</th>
                        <th>Satuan</th>
                        <?php
                        if ($_SESSION['level'] == 1) {
                        ?>
                            <th scope="col">Aksi</th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        if ($data['bahan']) {
                            $no = 0;
                            foreach ($data['bahan'] as $produk) {
                                $no++;
                        ?>
                                <td><?= $no ?></td>
                                <td><?= $produk['namabahan'] ?></td>
                                <td><?= $produk['stokbahan'] ?></td>
                                <td><?= $produk['satuanbahan'] ?></td>
                                <?php
                                if ($_SESSION['level'] == 1) {
                                ?>
                                    <td>
                                        <a href="<?= BASE_URL ?>/produk/detail ?>" class="btn btn-warning tampilUbahProduk"><i class="fa fa-edit"></i></a>
                                        <a href="<?= BASE_URL ?>/produk/hapus ?>" class="btn btn-danger" onclick="return confirm('Apakah kaka serius ingin menghapusnya..?');"><i class="fa fa-trash"></i></a>
                                    </td>
                                <?php
                                }
                                ?>
                    </tr>
            <?php }
                        }
            ?>
                </tbody>
<tfoot>

</tfoot>
            </table>
        </div>
    </div>
</div>