<?php 

include 'sesi.php';
$nama_app = " | Absensi Karyawan";
$modul =  (isset($_GET['s']))?$_GET['s']:"awal";
switch ($modul) {
	case 'page': default; $judul="Data admin $nama_app"; include 'page.php'; break;

}



 ?>