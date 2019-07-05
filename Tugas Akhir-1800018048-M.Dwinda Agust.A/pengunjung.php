<html>
<head>
</head>
</center>
</div><center><body background="img/kanan5.jpg"> <?php /*background-image digunakan untuk menampilakn foto background*/ ?>
<?php
echo "<head><title>Data Penilaian</title></head>"; //tampilan nama halaman web
$fp = fopen("tamu.txt","r");// r+ untuk membaca dan menulis ulang  file txt ke web 
echo "<table border=0>";//untuk mengenter data yang dikeluarkan dari txt	
while ($isi = fgets($fp,80))//untuk penampung dan maksimal hanya 80karakter
{
$pisah = explode("|",$isi);
echo "<tr><td>nama </td><td>: $pisah[0]</td></tr>"; //menampilkan variable nama dari txt
echo "<tr><td>nilai </td><td>: $pisah[1]</td></tr>";//menampilkan variable nilai dari txt

}

echo "<a class=btn href=masuk.html> Isi Buku tamu </a>";//untuk hyperlink ke masuk.html
echo("|");//memisahkan kedua hyperlink dengan menggunakan |
echo "<a class=btn href=utama.html> Home </a>";//untuk hyperlink ke utama.html
?></center>

</html>