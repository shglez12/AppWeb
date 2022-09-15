<?php
include "db.php";
$id = $_GET['id'];
$sql="DELETE FROM `datos_pacientes` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Registro eliminado con éxito");
}else{
    echo "Failed: " . mysqli_error($conn);
}
?>