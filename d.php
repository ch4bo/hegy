<?php
require_once "config.php";

$sql="select nev FROM csucs";

$hegyek="";
$maszok="";

$stmt=$db->query($sql);

while($row=$stmt->fetch()){

    extract($row);

  $hegyek.="<option value='{$nev}'>{$nev}</option>";
}





?>

<form method="post">
        <select name="hegy">
     <?=$hegyek?>
    </select>
</form>


<ul>
 <?=$maszok?>

</ul>