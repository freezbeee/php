<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 10:11
 */

$maTable = [23, 18, 5.2, '55',"Dupont"];
echo count($maTable). 'elements dans le tableau';
echo'<br><br>';
for ($i = 0 ; $i < count($maTable) ; $i++)
{
    echo $maTable[$i].'<br>';
}

$tabMulti = [[
    1,2,3],
$maTable];
echo '<br><br>';
foreach ($maTable as $cle => $element)
{
    echo "item N° $cle = $element<br>";
}