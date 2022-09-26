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
            <input type="hidden" class="form-control" placeholder="Nama Customer ... " value="<?= $data['customer']['idcustomer'] ?>">
            <input type="text" class="form-control" placeholder="Nama Customer ... " value="<?= $data['customer']['namacustomer'] ?>">
        </div>
    </div>
    <div class="form-group mb-3 ml-3">
        <div class="input-group w-50">
            <a class="btn btn-secondary"><i class="fa fa-address-book"></i></a>
            <input type="text" class="form-control" placeholder="Nomor Telepon ... " value="<?= $data['customer']['notelepon'] ?>">
        </div>
    </div>
    <div class="form-group mb-3 ml-3">
        <div class="input-group w-50">
            <a class="btn btn-secondary"><i class="fa fa-calendar-times mr-2"></i>Tgl Order</a>
            <input type="date" class="form-control" placeholder="Tanggal Order ... ">
            <a class="btn btn-secondary"><i class="fa fa-clock mr-2"></i>Jam Order</a>
            <input type="time" class="form-control" placeholder="Jam Order ">
        </div>
    </div>
    <div class="form-group mb-3 ml-3">
        <div class="input-group date w-50">
            <a class="btn btn-secondary"><i class="fa fa-calendar-week mr-2"></i>Tgl Ambil</a>
            <input type="date" class="form-control" placeholder="Tanggal Ambil ... ">
            <a class="btn btn-secondary"><i class="fa fa-clock mr-2"></i>Jam Ambil</a>
            <input type="time" class="form-control" placeholder="Jam Ambil ">
        </div>
    </div>
    <p class="ml-3">
        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputDigital">
            <i class="fas fa-toilet-paper mr-2"></i>Digital Print
        </a>
        <button class="btn btn-success" id="#"><i class="fa fa-save mr-2"></i>Simpan</button>
        <?php
        if ($_SESSION['level'] == 1) {
        ?>
            <button class="btn btn-success" id="#"><i class="fas fa-check-circle mr-2"></i>Setujui</button>

        <?php
        }
        ?>
        <button class="btn btn-success" id="#"><i class="fa fa-mail-bulk mr-2"></i>Buat Invoices</button>
        <a class="btn btn-secondary" href="<?= BASE_URL ?>/transaksi/digitalOrder" id="#"><i class="fas fa-sync-alt mr-2"></i>Reload</a>

    </p>
</div>
<div class="modal fade" id="inputDigital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Pemesanan Digital Print</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td>
                            <div class="input-group mb-3">
                                <a class="btn btn-secondary"><i class="fas fa-print"></i></a>
                                <select class="form-select" aria-label="Default select example">
                                    <?php
                                    if ($data['produk']){
                                        foreach($data['produk'] as $produk){
                                            ?>
                                                <option value="<?= $produk['namaProduk']?>"><?= $produk['namaProduk']?></option>
                                            <?php
                                        }
                                    }?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3 ml-3">
                                <a class="btn btn-secondary"><i class="fas fa-file-signature"></i></a>
                                <input type="text" class="form-control" placeholder="Nama Order">
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3 ml-4">
                                <a class="btn btn-secondary"><i class="fas fa-ruler"></i></a>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="Meter">Meter</option>
                                    <option value="PCS">PCS</option>
                            </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-group mb-3 w-50">
                                <a class="btn btn-secondary"><i class="fas fa-text-width"></i></a>
                                <input type="text" class="form-control" placeholder="Panjang">
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3 ml-3 w-50">
                                <a class="btn btn-secondary"><i class="fas fa-text-height"></i></a>
                                <input type="text" class="form-control" placeholder="Lebar">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-group mb-3 w-50">
                                <a class="btn btn-secondary"><i class="fas fa-sort-numeric-up"></i></a>
                                <input type="text" class="form-control" placeholder="Jumlah">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-window-close mr-2"></i>Batal</button>
                <a class="btn btn-success"><i class="fa fa-save mr-2"></i>Simpan</a>
            </div>
        </div>
    </div>
</div>