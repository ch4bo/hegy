<?php
require_once "config.php";

$sql="select nev,edatum from csucs where mazon=0";

$stmt=$db->query($sql);
$lista="";

while($row=$stmt->fetch()){
extract($row);
$lista.="<li>{$nev} , {$edatum} </li>";}
?>



<ul>
 <?=$lista?>

</ul>