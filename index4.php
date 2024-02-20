//soal nomor 4 <br>

<?php
 $nilai=array (9,8,4,6,2);
 $sort = $nilai;
 rsort($sort);
foreach ($nilai as $key => $value) {
    foreach ($sort as $key2 => $value2) {
        if($value==$value2){
            $key=$key2;
            break;
        }
    }
    echo $value2. " Ranking ke " .((int)$key+1). "<br/>";
}
?>