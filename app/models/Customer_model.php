<?php
error_reporting(3);
class Customer_Model {
    private $db;
    private $table = 'tbl_customers';
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllCustomer(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getCustomerById($idcustomer){
        $this->db->query('SELECT * FROM tbl_customers WHERE idcustomer= :idcustomer');
        $this->db->bind('idcustomer',$idcustomer);
        return $this->db->single(); 
    }
    public function tambahCustomer($data){
        $query = "INSERT INTO tbl_customers VALUES('',:namacustomer , :notelepon, :kategoricustomer)";
        $this->db->query($query);
        $this->db->bind('namacustomer',$data['namacustomer']);
        $this->db->bind('notelepon',$data['notelepon']);
        $this->db->bind('kategoricustomer',$data['kategoricustomer']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusCustomer($idcustomer){
        $query = "DELETE FROM tbl_customers WHERE idcustomer= :idcustomer";
        $this->db->query($query);
        $this->db->bind('idcustomer',$idcustomer);
        $this->db->execute();
        return $this->db->rowCount();

    }
    public function ubahDataCustomer($data){
        $query = "UPDATE tbl_customers SET namacustomer = :namacustomer , notelepon = :notelepon, kategoricustomer = :kategoricustomer WHERE idcustomer = :idcustomer";
        $this->db->query($query);
        $this->db->bind('namacustomer' , $data['namacustomer']);
        $this->db->bind('notelepon' , $data['notelepon']);
        $this->db->bind('kategoricustomer' , $data['kategoricustomer']);
        $this->db->bind('idcustomer' , $data['idcustomer']);

        $this->db->execute();
        return $this->db->rowCount();

    }
    public function cariDataCustomer(){
        $keywordcustomer = $_POST['keywordcustomer'];
        $query = "SELECT * FROM tbl_customers WHERE namacustomer LIKE :keywordcustomer OR notelepon LIKE :keywordcustomer OR kategoricustomer LIKE :keywordcustomer";
        $this->db->query($query);
        $this->db->bind('keywordcustomer',"%$keywordcustomer%");
        return $this->db->resultSet();

    }
    
    public function cariCustomer(){
        $keywordcustomer = $_GET['keywordcustomer'];
        $query = "SELECT * FROM tbl_customers WHERE namacustomer LIKE :keywordcustomer OR notelepon LIKE :keywordcustomer OR kategoricustomer LIKE :keywordcustomer";
        $this->db->query($query);
        $this->db->bind('keywordcustomer',"%$keywordcustomer%");
        return $this->db->resultSet();

    }
}
?>