<?php

$filename = "output.sql";

for ($i=1;$i<=171;$i++) {

$out .= "INSERT INTO bannerdata(id, value) VALUES ($i, NULL);\n";

}

file_put_contents($filename, $out);

