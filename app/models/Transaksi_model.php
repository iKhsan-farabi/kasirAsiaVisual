<?php


class Transaksi_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTransaksi(){
        $this->db->query("SELECT idtransaksi, namaorder,namaProduk, namacustomer,notelepon FROM tbl_customers JOIN tbl_transaksi ON tbl_transaksi.idcustomer = tbl_customers.idcustomer JOIN tbl_produk ON tbl_produk.idProduk = tbl_transaksi.idProduk;");
        return $this->db->resultSet();
}
}
?>