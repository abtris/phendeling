<html>
<head>
<style type="text/css">
body {
    background: url(background_1024.jpg) no-repeat; 
}

td {
     border: 1px solid gray;
     width: 32px;
     height: 32px;
     text-align: center;
     background: yellow;
     color: black;
}

table {
    position: relative;
    top: 100px; 
    left: 200px;
}

</style>
<script type="text/javascript">


</script>

</head>
<body>
<?php

$rows = 16;
$cols = 10;
$extra = 11;

$l=1;

echo "<table>\n";

for ($j = 0; $j < $cols; $j++) {
     
    echo "<tr>";

    for ($i = 0; $i < $rows; $i++) {
         echo "<td id='$l' title='$l - test text'>$l</td>";
         $l++;
    }   

    echo "</tr>\n";

}

echo "<tr>";
for ($i = 0; $i < $extra; $i++) {
     echo "<td id='$l'>$l</td>";
     $l++;
}
echo "</tr>\n";

echo "</table>\n";

?>
</body>
</html>