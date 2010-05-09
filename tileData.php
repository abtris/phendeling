<?php

include_once("/srv/www/www3/inc/config.inc.php");
include_once("/srv/www/www3/inc/dz_class.php");

$dz = new Dzogchen();
$data = $dz->get_bannerdata();


$xml = '<?xml version="1.0" encoding="utf-8" ?>
<tiles>'."\n";


$id = 0;
for ($x=0;$x<10;$x++) {
    for ($y=0;$y<=15;$y++) {
        $owner = $data[$id]['value'];            
        if (empty($owner)) $status = "free";
        else $status = "sold";
        $xml .= '<tile owner="'.$owner.'" status="'.$status.'" x="'.$x.'" y="'.$y.'" id="'.$id.'" />'."\n";
        $id++;
    }

}

for ($y=0; $y<=9; $y++) {
    $owner = $data[$id]['value'];            
    if (empty($owner)) $status = "free";
    else $status = "sold";   
    $xml.= '<tile owner="'.$owner.'" status="'.$status.'" x="10" y="'.$y.'" id="'.$id.'" />'."\n";
    $id++;
}

$xml .= '</tiles>'."\n";


echo $xml;

?>
