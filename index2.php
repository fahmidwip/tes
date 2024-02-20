//soal nomor 2 <br><br>

<?php
class Siswa{
    public $nama = "nama", $nrp = 000, $daftarnilai = 000;

}
class Nilai{
    public $mapel = "mapel", $nilai = 000;
}
$nilai = new nilai();
$nilai -> nilai = "090";

var_dump($nilai);

$siswa = new siswa;
$siswa->nama = "mamad";
$siswa->nrp = "123";
$nilai = new nilai();
$nilai->mapel="Inggris";
$nilai->nilai="100";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad1";
$siswa->nrp = "321";
$nilai = new nilai();
$nilai->mapel="Jepang";
$nilai->nilai="080";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad2";
$siswa->nrp = "231";
$nilai = new nilai();
$nilai->mapel="Korea";
$nilai->nilai="085";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad3";
$siswa->nrp = "111";
$nilai = new nilai();
$nilai->mapel="Arab";
$nilai->nilai="099";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad4";
$siswa->nrp = "921";
$nilai = new nilai();
$nilai->mapel="Russia";
$nilai->nilai="074";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad5";
$siswa->nrp = "124";
$nilai = new nilai();
$nilai->mapel="Inggris";
$nilai->nilai="091";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad6";
$siswa->nrp = "113";
$nilai = new nilai();
$nilai->mapel="Arab";
$nilai->nilai="077";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad7";
$siswa->nrp = "109";
$nilai = new nilai();
$nilai->mapel="Indonesia";
$nilai->nilai="089";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad8";
$siswa->nrp = "007";
$nilai = new nilai();
$nilai->mapel="Perancis";
$nilai->nilai="088";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad9";
$siswa->nrp = "099";
$nilai = new nilai();
$nilai->mapel="German";
$nilai->nilai="093";

var_dump($nilai);
var_dump($siswa);

$siswa = new siswa;
$siswa->nama = "mamad10";
$siswa->nrp = "551";
$nilai = new nilai();
$nilai->mapel="Spanyol";
$nilai->nilai="092";

var_dump($nilai);
var_dump($siswa);
?>