<?php
$msg="";
require_once "config.php";


   if(isset($_POST['beir'])){
       extract($_POST);
       $sql="insert into maszok values (null,'{$nev}','{$ferfi}')";
$stmt=$db->exec($sql);

if($stmt)
    $msg="Sikeres adatbeírás.";
else $msg="Nem sikerült";
   
}

?>



<div class="col-6">
    <form method="post">
       
        Név: <input type="text" name="nev" id="" class="form-control" required>
        Férfi(0 vagy 1): <input type="number" name="ferfi" id="" class="form-control" required>



        <input type="submit" value="Beír" name="beir" class="btn btn-outline-primary">
    </form>
</div>
<div>

<?=$msg?>
</div>