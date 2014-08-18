<form name="authForm" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
N:<input type="text" name="str">
<input type="submit">
</form>
<?php

namespace marima64\myProject;

if (isset ($_POST ['str'])){
$str = $_POST ['str'];}
if (($str >= 0) && ($str <= pow(10,6))){
$num = 0;
$num1 = 0;
$arr1 = str_split($str); }//преобразование строки в массив
else {
    echo ('Введите 6-значное число, 0 ≤ N < 10^6'); 
}

for ($i=0; $i<3; $i++){
$num = $arr1[$i] + $num;
}

for ($i=3; $i<6; $i++){
$num1 = $arr1[$i] + $num1;
}
if ($num==$num1){
    echo ('YES');
    
}
else {
    echo ('NO');
}
?>
