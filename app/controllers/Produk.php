<?php
class Produk extends Controller
{
    public function cari()
    {
        $data['produk'] =  $this->model('Produk_model')->cariDataProduk();
        $this->view('templates/header');
        $this->view('produk/digital', $data);
        $this->view('templates/footer');
    }
    public function bahan(){
        $data['judul'] = 'Bahan Management';
        $data['bahan'] = $this->model('Produk_model')->getAllBahan();
        $this->view('templates/header',$data);
        $this->view('produk/bahan',$data);
        $this->view('templates/footer');
    }
    public function inventaris(){
        $this->view('templates/header');
        $this->view('produk/inventaris');
        $this->view('templates/footer');
    }
    public function index()
    {
        $data['judul'] = 'Semua Produk';
        $data['produkDigital'] =  $this->model('Produk_model')->getProdukDigital();
        $data['produkDocu'] =  $this->model('Produk_model')->getProdukDocu();
        $data['produkStempel'] =  $this->model('Produk_model')->getProdukStempel();
        $data['produkBlanko'] =  $this->model('Produk_model')->getProdukBlanko();
        $this->view('templates/header',$data);
        $this->view('produk/index',$data);
        $this->view('templates/footer');
    }
    public function digital()
    {
        $data['judul'] = 'Produk Digital Print';
        $data['produk'] = $this->model('Produk_model')->getProdukDigital();
        $this->view('templates/header',$data);
        $this->view('produk/digital', $data);
        $this->view('templates/footer');
    }
    public function docu()
    {
        $data['judul'] = 'Produk Docu Print';
        $data['produk'] = $this->model('Produk_model')->getProdukDocu();
        $this->view('templates/header',$data);
        $this->view('produk/docu', $data);
        $this->view('templates/footer');
    }
    public function detail($idProduk)
    {
        $data['judul'] = 'Detail Produk';
        $data['produk'] = $this->model('Produk_model')->getProdukById($idProduk);
        $this->view('templates/header',$data);
        $this->view('produk/detail', $data);
        $this->view('templates/footer');
    }
    public function getUbahProduk()
    {
        echo json_encode($this->model('Produk_model')->getProdukById($_POST['idProduk']));
    }
    public function tambah()
    {
        if ($this->model('Produk_model')->tambahProduk($_POST) > 0) {
            Flasher::setFlash('Produk Berhasil', ' Ditambahkan', 'success', SVG_SUCCESS);
            if ($_POST['kategoriProduk'] == 'Docu Print') {
                header('Location:' . BASE_URL . '/produk/docu');
                exit();
            } else if ($_POST['kategoriProduk'] == 'Digital Print') {
                header('Location:' . BASE_URL . '/produk/digital');
                exit();
            } else {
                echo 'ERROR';
            }
        } else {
            Flasher::setFlash('Produk Gagal', ' Ditambahkan', 'danger', SVG_DANGER);
            header('Location: ' . BASE_URL . '/produk/digital');
        }
    }
    public function hapus($idProduk)
    {
        if ($this->model('Produk_model')->hapusProduk($idProduk) > 0) {
            Flasher::setFlash('Produk Berhasil', ' Terhapus', 'success', SVG_SUCCESS);
            header('Location:'.BASE_URL.'/produk/digital');
            exit();
        } else {
            Flasher::setFlash('Produk Gagal', ' Terhapus', 'danger', SVG_DANGER);
            header('Location:'.BASE_URL.'/produk/digital');
            exit();
        }
    }
    public function ubah()
    {
        if ($this->model('Produk_model')->ubahDataProduk($_POST) > 0) {
            Flasher::setFlash('Produk Berhasil', ' Direvisi', 'success', SVG_SUCCESS);
            if ($_POST['kategoriProduk'] == 'Docu Print') {
                header('Location:' . BASE_URL . '/produk/docu');
                exit();
            } else if ($_POST['kategoriProduk'] == 'Digital Print') {
                header('Location:' . BASE_URL . '/produk/digital');
                exit();
            } else {
                echo 'ERROR';
            }
        } else {
            Flasher::setFlash('Produk Gagal', ' Direvisi', 'danger', SVG_DANGER);
            header('Location:' . BASE_URL . '/produk/digital');
            exit();
        }
    }
}
