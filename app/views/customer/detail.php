<div class="container-mt-5">

    <div class="col-lg-10">
        <?php
        if (isset($data['customer'])) {
        ?>
            <div class="card">
                <div class="card-header">
                    Detail Data Customer
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $data['customer']['namacustomer'] ?></p>
                        <footer class="blockquote-footer"> Nomor yang bisa dihubungi : <cite title="Source Title"><?= $data['customer']['notelepon'] ?></cite></footer>
                        <footer class="blockquote-footer"> Kategori Customer : <cite title="Source Title"><?= $data['customer']['kategoricustomer'] ?></cite></footer>
                    </blockquote>
                </div>
            </div>
        <?php } ?>
    </div>
    <br>
    <p class="ml-3">
        <button class="alert alert-danger revisiDataCustomer" data-id="<?= $data['customer']['idcustomer'];?>"type="button" data-bs-toggle="collapse" data-bs-target="#ubahCustomer" aria-expanded="false" aria-controls="collapseExample">
            Revisi Data Customer
        </button>
        <a class="alert alert-info text-decoration:none;" href="<?= BASE_URL; ?>/customer" type="button">
            Kembali
        </a>
    </p>
    <!--Ubah Data Customer COllapse -->
    <div class="collapse" id="ubahCustomer">
        <br>
        <div class="col-lg-9">
            <form action="<?= BASE_URL ?>/customer/ubah" method="POST" class="ubahDataCustomer">
                <input type="hidden" name="idcustomer" id="idcustomer">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="formLabelNama">Nama</label>
                    <input type="text" class="form-control" id="namacustomer" name="namacustomer" aria-describedby="emailHelp" placeholder="Maksimal 15 Kata..." autocomplete="off" value="">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNumber" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="notelepon" name="notelepon" placeholder="ex. 628123456789" autocomplete="off" value="">
                    <div id="emailHelp" class="form-text">Pastikan Nomor Telepon Sesuai Dan Tidak Ada Redudansi.</div>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategoricustomer" id="kategoricustomer" name="kategoricustomer">
                        <option value="Langganan">Langganan</option>
                        <option value="Baru">Baru</option>
                        <option value="Teman Bos">Teman Bos</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-edit mr-2"></i>Update</button>
            </form>
        </div>
    </div>
    <!--Akhir-->
</div>