$(function(){
$('.tampilUbahCustomer').on('click',function(){
    console.log('ok');
});
$('.tambahDataCustomer').attr('action','http://localhost:8080/asiavisual/public/customer/tambah');
$('.ubahDataCustomer').attr('action','http://localhost:8080/asiavisual/public/customer/ubah');
$('.revisiDataCustomer').on('click',function(){
       const idcustomer = $(this).data('id');
       $.ajax({
            url: 'http://localhost:8080/asiavisual/public/customer/getUbahCustomer',
            data: {idcustomer : idcustomer},
            method: 'post',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#namacustomer').val(data.namacustomer);
                $('#notelepon').val(data.notelepon);
                $('#kategoricustomer').val(data.kategoricustomer);
                $('#idcustomer').val(data.idcustomer);
                
            }
       });
});
$('.cariDataCustomer').attr('action','http://localhost:8080/asiavisual/public/customer/cari');

//  form produk
$('.tampilUbahProduk').on('click',function(){
    console.log('uhuyy');
});
$('.tambahDataProduk').attr('action','http://localhost:8080/asiavisual/public/produk/tambah');
$('.cariDataProduk').attr('action','http://localhost:8080/asiavisual/public/produk/cari');
$('.ubahDataProduk').attr('action','http://localhost:8080/asiavisual/public/produk/ubah');
$('.revisiDataProduk').on('click',function(){
       const idProduk = $(this).data('id');
       $.ajax({
            url: 'http://localhost:8080/asiavisual/public/produk/getUbahProduk',
            data: {idProduk : idProduk},
            method: 'post',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#namaProduk').val(data.namaProduk);
                $('#hargaProduk').val(data.hargaProduk);
                $('#satuanProduk').val(data.satuanProduk);
                $('#kategoriProduk').val(data.kategoriProduk);
                $('#idProduk').val(data.idProduk);
                
            }
       });
});
$('.tambahDataProduk').attr('action','http://localhost:8080/asiavisual/public/produk/tambah');
});