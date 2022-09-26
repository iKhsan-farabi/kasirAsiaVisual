<?php
class Transaksi extends Controller{
    public function index(){
        $data['judul'] = 'Buat Invoice Baru';
        $data['customer'] = $this->model('Customer_model')->getAllCustomer();
        $this->view('templates/header',$data);
        $this->view('transaksi/index',$data);
        $this->view('templates/footer');
    }
    public function digitalOrder(){
        $data['judul'] = 'Digital Print Order';
        $this->view('templates/header',$data);
        $data['customer'] = $this->model('Customer_model')->getAllCustomer();
        $this->view('transaksi/digitalOrder',$data);
        $this->view('templates/footer');
    }
    public function docuOrder(){
        $data['judul'] = 'Docu Print Order';
        $this->view('templates/header',$data);
        $data['customer'] = $this->model('Customer_model')->getAllCustomer();
        $this->view('transaksi/docuOrder',$data);
        $this->view('templates/footer');
    }
    public function detailDigitalOrder($idcustomer){
        $data['produk'] = $this->model('Produk_model')->getProdukDigital();
        $data['judul'] = 'Digital Print Order';
        $this->view('templates/header',$data);
        $data['customer'] = $this->model('Customer_model')->getCustomerById($idcustomer);
        $this->view('transaksi/detailDigitalOrder',$data);
        $this->view('templates/footer');
    }
    public function detailDocuOrder($idcustomer){
        $data['produk'] = $this->model('Produk_model')->getProdukDocu();
        $data['judul'] = 'Docu Print Order';
        $this->view('templates/header',$data);
        $data['customer'] = $this->model('Customer_model')->getCustomerById($idcustomer);
        $this->view('transaksi/detailDocuOrder',$data);
        $this->view('templates/footer');
    }
    public function transaksi(){
        $data['transaksi'] = $this->model('Transaksi_model')->getTransaksi();
        $data['judul'] = 'Detail Print Order';
        $this->view('templates/header',$data);
        $this->view('transaksi/transaksi',$data);
        $this->view('templates/footer');
    }
}
?>