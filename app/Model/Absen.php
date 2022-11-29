<?php
require_once __DIR__.'/../config/Database.php';
class Absen {
    var$id="";
var $nama="";
var$tglkegiatan = "";
var $sw="";
var $tglabsen="";
    public static function getAll()
    {
        $qu   = "select * from absen";
        $coon = new Database();
        return mysqli_query($coon->database, $qu);
    }

    public static function  getByid($id)
    {
        $qw = "select * from absen where id_absen='$id'";
        $con =new Database();
        return mysqli_query($con->database,$qw);
    }

    public function insert()
    {
        $quw = "insert into absen( nama_kegiatan, tgl_kegiatan,status,tgl_absen)  values ('$this->nama','$this->tglkegiatan','$this->sw','$this->sglabsen')";
        $kon = new Database();
        return mysqli_query($kon->database, $quw);
    }
    public function update(){

        $sql = " update absen set nama_kegiatan = '$this->nama',tgl_kegiatan = '$this->tglkegiatan',status = '$this->sw',tgl_absen = '$this->tglabsen'where id_absen = '$this->id'";
        $kon = new Database();
        return mysqli_query($kon->database, $sql);
    }
public function delete(){
        $sql="delete from absen where id_absen='$this->id'";
        $kon = new Database();
        return mysqli_query($kon->database,$sql);
}


}