<div class="container-mt-5">
<div class="row">
        <?php
        Flasher::flash();
        ?>  
    </div>
    <p class="alert alert-info ml-3"><i class="fa fa-file-invoice mr-2"></i>Form Pembuatan Invoice</p>
    <div class="form-group mb-3 ml-3">
        <div class="input-group w-50">
            <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#lihatCustomer"><i class="fa fa-user"></i></a>
            <input type="text" class="form-control" placeholder="Nama Customer ... ">
        </div>      
</div>
<div class="form-group mb-3 ml-3">
        <div class="input-group w-50">
            <a class="btn btn-secondary"><i class="fa fa-address-book"></i></a>
            <input type="text" class="form-control" placeholder="Nomor Telepon ... "disabled readonly>
        </div>
    </div>
    <div class="form-group mb-3 ml-3">
        <div class="input-group w-50">
            <a class="btn btn-secondary"><i class="fa fa-calendar-times mr-2"></i>Tgl Order</a>
            <input type="date" class="form-control" placeholder="Tanggal Order ... "disabled readonly>
            <a class="btn btn-secondary"><i class="fa fa-clock mr-2"></i>Jam Order</a>
            <input type="time" class="form-control" placeholder="Jam Order "disabled readonly>
        </div>
    </div>
    <div class="form-group mb-3 ml-3">
        <div class="input-group date w-50">
            <a class="btn btn-secondary"><i class="fa fa-calendar-week mr-2"></i>Tgl Ambil</a>
            <input type="date" class="form-control" placeholder="Tanggal Ambil ... "disabled readonly>
            <a class="btn btn-secondary"><i class="fa fa-clock mr-2"></i>Jam Ambil</a>
            <input type="time" class="form-control" placeholder="Jam Ambil "disabled readonly>
        </div>
    </div>
    <p class="ml-3">
        <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#inputDocu">
            <i class="fas fa-map mr-2"></i>Docu Print
        </a>
        <a class="btn btn-success" id="#" href="<?= BASE_URL ?>/transaksi/transaksi"><i class="fa fa-save mr-2"></i>Simpan</a>
        <?php
        if ($_SESSION['level'] == 1) {
        ?>
            <button class="btn btn-success" id="#"><i class="fas fa-check-circle mr-2"></i>Setujui</button>

        <?php
        }
        ?>
        <button class="btn btn-success" id="#"><i class="fa fa-mail-bulk mr-2"></i>Buat Invoices</button>
        <a class="btn btn-secondary" href="<?= BASE_URL ?>/transaksi/docuOrder" id="#"><i class="fas fa-sync-alt mr-2"></i>Reload</a>

    </p>
    <div class="modal fade" id="lihatCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class=""></i>Silahkan Pilih Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="ml-3">
                        <a class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-plus-circle mr-2"></i>Tambah Data Customer
                        </a>
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
                                <a class="btn btn-success"><i class="fa fa-save mr-2"></i>Simpan</a>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row ml-2">
                        <div class="col-lg-15">
                            <table id="tableData" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Customer</th>
                                        <th>Nomor Telepon</th>
                                        <th>Kategori Customer</th>
                                        <th>Aksi</th>
                                        
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
                                                <td><a href="<?= BASE_URL ?>/transaksi/detailDocuOrder/<?= $customer['idcustomer']; ?>" class="btn btn-primary"><i class="fas fa-clipboard-list mr-2"></i>Pilih</a></td>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
        
    </div>
</div>