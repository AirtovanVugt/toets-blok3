<?php
include("includes/function.php");
if(isset($_GET["id"])){
    $delete = $_GET["id"];
}
else{
    $id = 0;
}

delete("$delete");
header("location: index.php?delete=success");
?>