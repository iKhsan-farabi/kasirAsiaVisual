<table id="tableData" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>ID Transaksi</th>
            <th>Nama Order</th>
            <th>Nama Produk</th>
            <th>Nama Customer</th>
            <th>No Telepon</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            if ($data['transaksi']) {
                $no = 0;
                foreach ($data['transaksi'] as $transaksi) {
                    $no++;
            ?>
                    <td><?= $no ?></td>
                    <td><?= $transaksi['idtransaksi'] ?></td>
                    <td><?= $transaksi['namaorder'] ?></td>
                    <td><?= $transaksi['namaProduk'] ?></td>
                    <td><?= $transaksi['namacustomer'] ?></td>
                    <td><?= $transaksi['notelepon'] ?></td>
                    <td><a href="<?= BASE_URL ?>/transaksi/detailDigitalOrder/<?= $transaksi['idcustomer']; ?>" class="btn btn-primary"><i class="fas fa-clipboard-list mr-2"></i>Pilih</a></td>
        </tr>
<?php }
            }
?>
    </tbody>
    <tfoot>

    </tfoot>
</table>