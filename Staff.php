<?php
namespace Staff;

abstract class hoSo
{
    var $hoTen,$namSinh,$tuoi;
    abstract public function themHoSo($hoTen, $namSinh, $tuoi);

}
class nhanVien extends hoSo
{

    public function themHoSo($hoTen, $namSinh, $tuoi)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->tuoi = $tuoi;
    }
    public function themEmail($email){
        $this->email=$email;
    }
}
$nv1 = new nhanVien();
$nv1->themHoSo('Khoa Nguyen','1996',26);
$nv1->themEmail('nguyendangkhoa1896@gmail.com');
echo $nv1->hoTen;