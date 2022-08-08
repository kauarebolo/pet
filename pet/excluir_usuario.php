<?php
include 'conecta.php';
$id = $_GET['id'];
$sql = "UPDATE FROM usuario WHERE id ='$id'";
if(mysqli_query($con,$sql))
{
    echo "<script language='javascript' type='text/javascript'>
            alert('Usuario apagado com sucesso!');
            window.location.href='usuario.php';
            </script>";
}
else
{
    echo "<script language='javascript' type='text/javascript'>
            alert('Usuario não foi apagado!');
            window.location.href='usuario.php';
            </script>";
}
?>