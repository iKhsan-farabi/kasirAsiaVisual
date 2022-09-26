<div class="modal fade" id="lihatCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Pemesanan Digital Print</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="ml-3">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Tambah Data Customer
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="col-lg-4">
                            <div class="alert alert-success" role="alert">
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
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <!-- Live Search AJax -->
                    <div class="col-lg-9">
                        <form class="d-flex" action="#" method="POST">
                            <input class="form-control me-2" type="text" placeholder="Cari berdasarkan nama atau nomor telepon ..." autocomplete="off" aria-label="Search" name="keywordcustomer" id="keywordcustomer">
                            <div class="pl-2">
                                <button class="btn btn-outline-success" type="submit" id="tombolcaricustomer">Cari</button>
                            </div>
                        </form>
                    </div>
                    <!-- Akhir Ajax -->
                    <div class="row ml-2">
                        <br>
                        <div class="col-lg-12" id="liveSearchContainer">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Customer</th>
                                        <th scope="col">Nomor Telepon</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>

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
                                                <td>
                                                    <a href="<?= BASE_URL ?>/customer/detail/<?= $customer['idcustomer']; ?>" class="btn btn text-bg-warning tampilUbahCustomer">Pilih</a>
                                                </td>
                                    </tr>
                            <?php }
                                        }
                            ?>
                            <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>