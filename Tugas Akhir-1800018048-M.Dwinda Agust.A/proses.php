<html>
<head>

</head>
<body>
	<center>

<?php
echo "<head><title>DATA BAYAR</head></title>";//tampilan nama halaman web
$fp = fopen("tamu.txt","a+");//a+ untuk membaca dan menambah data ke txt dan fopen untuk membuka file txt 
$nama = $_POST['nama'];//menyimpan variable nama
$nilai = $_POST['nilai'];//menyimpan variable nilai
fputs($fp,"$nama|$nilai\n");//untuk menuliskan data dari variable nama dan nilai ke txt
fclose($fp);//untuk menutup file yang dibuka tadi
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=utama.html> Home </a>";//untuk hyperlink ke utama.html
?>
</center>
</body>
</html>