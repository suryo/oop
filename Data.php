<?php

namespace Data;

class Data
{
    # route
    public function index()
    {
        $member = array(
            array("nama" => "a", "alamat" => "malang", "email" => "a.gmail.com"),
            array("nama" => "b", "alamat" => "sidoarjo", "email" => "b.gmail.com"),
            array("nama" => "c", "alamat" => "surabaya", "email" => "c.gmail.com"),
        );

        return $member;
    }
}
