<?php
require '../Model/Absen.php';

$tgl=date('Y/m/d H:i:s');
$a = new Absen();
$a->tglabsen = $tgl;
$a->update();