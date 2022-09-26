<?php
class Customer extends Controller
{
    public function cari()
    {
        $this->view('templates/header');
        $data['customer'] = $this->model('Customer_model')->cariDataCustomer();
        $this->view('customer/index', $data);
        $this->view('templates/footer');
    }
    public function index()
    {
        $data['judul'] = 'Customer Management';
        $data['customer'] = $this->model('Customer_model')->getAllCustomer();
        $this->view('templates/header',$data);
        $this->view('customer/index', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Customer_model')->tambahCustomer($_POST) > 0) {
            Flasher::setFlash('Customer Berhasil', ' Ditambahkan', 'success', SVG_SUCCESS);
            header('Location: ' . BASE_URL . '/customer');
            exit();
        } else {
            Flasher::setFlash('Customer Gagal', ' Ditambahkan', 'danger', SVG_DANGER);
            header('Location: ' . BASE_URL . '/customer');
        }
    }
    public function detail($idcustomer)
    {
        $data['judul'] = 'Detail Customer';
        $data['customer'] = $this->model('Customer_model')->getCustomerById($idcustomer);
        $this->view('templates/header',$data);
        $this->view('customer/detail', $data);
        $this->view('templates/footer');
    }

    public function hapus($idcustomer)
    {
        if ($this->model('Customer_model')->hapusCustomer($idcustomer) > 0) {
            Flasher::setFlash('Customer Berhasil', ' Terhapus', 'Success', SVG_SUCCESS);
            header('Location: ' . BASE_URL . '/customer');
            exit();
        } else {
            Flasher::setFlash('Customer Gagal', ' Terhapus', 'danger', SVG_DANGER);
            header('Location:' . BASE_URL . '/customer');
            exit();
        }
    }
    public function getUbahCustomer()
    {
        echo json_encode($this->model('Customer_model')->getCustomerById($_POST['idcustomer']));
    }
    public function ubah()
    {
        if ($this->model('Customer_model')->ubahDataCustomer($_POST) > 0) {
            Flasher::setFlash('Customer Berhasil', ' Direvisi', 'success', SVG_SUCCESS);
            header('Location:' . BASE_URL . '/customer');
            exit();
        } else {
            Flasher::setFlash('Customer Gagal', ' Direvisi', 'danger', SVG_DANGER);
            header('Location:' . BASE_URL . '/customer');
            exit();
        }
    }
}
