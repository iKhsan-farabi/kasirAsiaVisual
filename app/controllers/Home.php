<?php
class Home extends Controller{
    
    public function index(){
        $data['judul'] = 'Welcome! AsiaVisual ERP';
        $data['produkDigital'] =  $this->model('Produk_model')->getProdukDigital();
        $data['produkDocu'] =  $this->model('Produk_model')->getProdukDocu();
        $data['produkStempel'] =  $this->model('Produk_model')->getProdukStempel();
        $data['produkBlanko'] =  $this->model('Produk_model')->getProdukBlanko();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');

    }
    
}
?>