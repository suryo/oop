<?php
use Ctrl\Ctrl;
require_once('Ctrl.php');

$showresult = new Ctrl();
$showresult->index();

$nama = "Suryo Atmojo";
$alamat = "Surabaya";
$email = "suryoatm@gmail.com";

$member = array(
    array("nama"=>"a","alamat"=>"malang","email"=>"a.gmail.com"),
    array("nama"=>"b","alamat"=>"sidoarjo","email"=>"b.gmail.com"),
    array("nama"=>"c","alamat"=>"surabaya","email"=>"c.gmail.com"),
);


var_dump($member);

$showresult->showprofile($nama, $alamat, $email);
