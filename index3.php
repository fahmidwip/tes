//soal nomor 3 <br><br>

<?php
$data_array = array('Merah', 'Kuning', 'Hijau');


$data_array_random = array_rand( $data_array, 1);

/*tampilkan data array random*/



echo "Warna Yang Muncul";
echo "<br/>";
echo $data_array[$data_array_random];


?>