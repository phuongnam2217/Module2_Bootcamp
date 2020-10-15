<?php
// function($str,$value){
//     $count=0;
//     for($i = 0;$i < strlen($str);$i++){
//         if($value;
//     }
// }
$str = "Phuong nNam";
$x = "n";
$count = 0;
$str = strtolower($str);
echo $str;
for ($i = 0; $i < strlen($str); $i++) {
    if ($x == $str[$i]) {
        $count++;
    }
}
echo "<br>";
echo $count;
