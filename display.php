<?php
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
echo "Ваше имя: <b>".$name . " " . $surname . "</b>";

function Parse($p1, $p2, $p3) {
    $num1 = strpos($p1, $p2);
    if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
 
$String = file_get_contents('http://obninsksite.ru');
echo Parse($String, '<div class="unique item">', '</div>');
 echo "Привет, я - скрипт PHP!"; 
?>

<?php 
         echo "Привет, я - скрипт PHP!"; 
         ?>