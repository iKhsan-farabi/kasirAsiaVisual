<?php
class Flasher{
    public static function setFlash($pesan, $aksi, $tipe, $icon){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
            'icon' => $icon
        ];
    }
   
   
    public static function flash(){
            if(isset($_SESSION['flash'])){
                echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' d-flex align-items-center" role="alert">
                '.$_SESSION['flash']['icon'].'
                <div>
                  '.$_SESSION['flash']['pesan'].''.$_SESSION['flash']['aksi'].'
                </div>';
              unset($_SESSION['flash']);
            }
}
 
}
