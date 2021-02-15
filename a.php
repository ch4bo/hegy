<?php
require_once "config.php";

$sql="select nev,magassag,edatum FROM csucs order by magassag desc";

$stmt=$db->query($sql);
$lista="";

while($row=$stmt->fetch()){
extract($row);
$lista.="<li>{$nev} , {$magassag} , {$edatum}</li>";}
?>



<ul>
 <?=$lista?>

</ul>