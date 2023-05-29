<?php

use Data\Data;

require_once('Data.php');

echo "server berjalan dengan baik";
echo "<br>";
echo "isi data member adalah";
echo "<br>";


$mmbr = new Data();
$result = $mmbr->index();

for ($i = 0; $i < count($result); $i++) {
    echo ($result[$i]["nama"] . "|" .
        ($result[$i]["alamat"]) . "|" .
        ($result[$i]["email"])
    );
    echo "<br>";
}

for ($i = 0; $i < count($result); $i++) {
    # code...
}
