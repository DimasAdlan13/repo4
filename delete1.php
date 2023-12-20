<?php
    $file = "zain.json";
    $zain = file_get_contents($file);
    $data = json_decode($zain, true);

    foreach($data as $key => $d) {
        $no = $d['no'];
        if ($no >= 12 && $no <= 15){
            unset($data[$key]);
        }
    }

    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    $zain = file_put_contents($file, $jsonfile);
?>