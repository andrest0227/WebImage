<?php 
include('coneccion.php');
$foto=[""];
$sql="select * from images";
if ($runresult2 = mysqli_query($mysqli, $sql))
  {
    while ($row2 = mysqli_fetch_array($runresult2)) {
    $foto=$row2["foto"];
    }
}
?>