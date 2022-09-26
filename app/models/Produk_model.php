<?php
error_reporting(3);
class Produk_model{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllBahan(){
        $this->db->query('SELECT * FROM tbl_bahan');
        return $this->db->resultSet();
    }
    public function getAllProduk(){
        $this->db->query('SELECT * FROM tbl_produk');
        return $this->db->resultSet();
    }
    public function getProdukDigital(){
        $this->db->query('SELECT * FROM tbl_produk WHERE kategoriProduk = "Digital Print"');
        return $this->db->resultSet();
    }
    public function getProdukStempel(){
        $this->db->query('SELECT * FROM tbl_produk WHERE kategoriProduk = "Stempel"');
        return $this->db->resultSet();
    }
    public function getProdukBlanko(){
        $this->db->query('SELECT * FROM tbl_produk WHERE kategoriProduk = "Undangan"');
        return $this->db->resultSet();
    }
    public function getProdukDocu(){
        $this->db->query('SELECT * FROM tbl_produk WHERE kategoriProduk = "Docu Print"');
        return $this->db->resultSet();
    }
    public function getProdukById($idProduk){
        $this->db->query('SELECT * FROM tbl_produk WHERE idProduk= :idProduk');
        $this->db->bind('idProduk',$idProduk);
        return $this->db->single(); 
    }
    public function tambahProduk($data){
        $query = "INSERT INTO tbl_produk VALUES('',:namaProduk , :hargaProduk, :satuanProduk , :kategoriProduk)";
        $this->db->query($query);
        $this->db->bind('namaProduk',$data['namaProduk']);
        $this->db->bind('hargaProduk',$data['hargaProduk']);
        $this->db->bind('satuanProduk',$data['satuanProduk']);
        $this->db->bind('kategoriProduk',$data['kategoriProduk']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataProduk($data){
        $query = "UPDATE tbl_produk SET namaProduk = :namaProduk , hargaProduk = :hargaProduk, satuanProduk = :satuanProduk , kategoriProduk = :kategoriProduk WHERE idProduk = :idProduk";
        $this->db->query($query);
        $this->db->bind('namaProduk', $data['namaProduk']);
        $this->db->bind('hargaProduk' , $data['hargaProduk']);
        $this->db->bind('satuanProduk' , $data['satuanProduk']);
        $this->db->bind('kategoriProduk' , $data['kategoriProduk']);
        $this->db->bind('idProduk' , $data['idProduk']);

        $this->db->execute();
        return $this->db->rowCount();

    }
    public function hapusProduk($idProduk){
        $query = "DELETE FROM tbl_produk WHERE idProduk= :idProduk";
        $this->db->query($query);
        $this->db->bind('idProduk',$idProduk);
        $this->db->execute();
        return $this->db->rowCount();

    }
    public function cariDataProduk(){
        $keywordproduk = $_POST['keywordproduk'];
        $query = "SELECT * FROM tbl_produk WHERE namaProduk LIKE :keywordproduk";
        $this->db->query($query);
        $this->db->bind('keywordproduk',"%$keywordproduk%");
        return $this->db->resultSet();
    }
    

}
