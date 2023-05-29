<?php

namespace Ctrl;
class Ctrl
{
    # route
    public function index()
    {
    echo "Member Profile";
    }

    public function showprofile($nama, $alamat, $email)
    {
      echo "<p>Nama : ".$nama."</p>";
      echo "<p>Alamat : ".$alamat."</p>";
      echo "<p>Email : ".$email."</p>";
    }

}
