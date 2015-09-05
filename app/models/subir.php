<?php 
include("coneccion.php");
$foto="";
$observaciones="";
if(isset($_POST["subir"])){
    copy($_FILES['image']['tmp_name'],$_FILES['image']['name']);
  echo "La foto se registro en el servidor.<br>";
  $nom=$_FILES['image']['name'];
  
    copy($_FILES['image']['tmp_name'],'../../public/img/'.$_FILES['image']['name']);
    $foto= $_FILES['image']['name'];
    $sql0 = "insert into images (foto) value ('".$foto."') ;";
    echo "<script>alert('Has subido tu imagen exitosamente')</script>";
                    
    $runresult= mysqli_real_query($mysqli, $sql0);
   
    header('Location: ../../public/subirx.php');
}


?>