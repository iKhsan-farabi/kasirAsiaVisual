<div class="container-mt-5">
    <div class="row">
        <?php
        Flasher::flash();
        ?>
    </div>
    <p class="ml-3">
        <a class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa fa-plus-circle mr-2"></i>Tambah Data Customer
        </a>
        <a class="btn btn-secondary" href="<?= reload ?>">
            <i class="fas fa-sync-alt mr-2"></i>Reload
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="col-lg-4">
            <div class="alert alert-danger" role="alert">
                Cari terlebih dahulu ya melalui nomor telepon, jangan langsung buat data baru, Okayy
            </div>
        </div>
        <br>
        <div class="col-lg-10">
            <form action="<?= BASE_URL ?>/Customer/tambah" method="POST" class="tambahDataCustomer">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="namacustomer" name="namacustomer" aria-describedby="emailHelp" placeholder="Maksimal 15 Kata..." autocomplete="off">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNumber" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="notelepon" name="notelepon" placeholder="ex. 628123456789" autocomplete="off">
                    <div id="emailHelp" class="form-text">Pastikan Nomor Telepon Sesuai Dan Tidak Ada Redudansi.</div>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="kategoricustomer" name="kategoricustomer" placeholder="Kategori Customer" autocomplete="off" value="Baru">
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Simpan</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row ml-2">
        <div class="col-lg-10">
            <table id="tableData" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Customer</th>
                        <th>Nomor Telepon</th>
                        <th>Kategori Customer</th>
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
                        if ($data['customer']) {
                            $no = 0;
                            foreach ($data['customer'] as $customer) {
                                $no++;
                        ?>
                                <td><?= $no ?></td>
                                <td><?= $customer['namacustomer'] ?></td>
                                <td><?= $customer['notelepon'] ?></td>
                                <td><?= $customer['kategoricustomer'] ?></td>
                                <?php
                                if ($_SESSION['level'] == 1) {
                                ?>
                                    <td>
                                        <a href="<?= BASE_URL ?>/customer/detail/<?= $customer['idcustomer']; ?>" class="btn btn-warning tampilUbahcustomer"><i class="fa fa-edit"></i></a>
                                        <a href="<?= BASE_URL ?>/customer/hapus/<?= $customer['idcustomer']; ?>" class="btn btn-danger" onclick="return confirm('Apakah kaka serius ingin menghapusnya..?');"><i class="fa fa-trash"></i></a>
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