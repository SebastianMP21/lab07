<?php
include_once 'db.php';

/* codigo para insertar datos */
if (isset($_POST['save'])) 
{
    $rn = $MySQLiconn->real_escape_string($_POST['rn']); 
    $tn = $MySQLiconn->real_escape_string($_POST['tn']);
    $ln = $MySQLiconn->real_escape_string($_POST['ln']);
    $gn = $MySQLiconn->real_escape_string($_POST['gn']);
    $kn = $MySQLiconn->real_escape_string($_POST['kn']);
    $zn = $MySQLiconn->real_escape_string($_POST['zn']);
    
    $SQL = $MySQLiconn->query("INSERT INTO biblioteca(rn, tn, ln, gn, kn, zn) VALUES('$rn','$tn','$ln','$gn','$kn','$zn')");

    if (!$SQL) 
    {
        echo $MySQLiconn->error;    
    }
}
    
    /* codigo para insertar datos */

    /* codigo para eliminar datos */
if (isset($_GET['del']))
    {
        $SQL = $MySQLiconn->query("DELETE FROM biblioteca WHERE id=".$_GET['del']);
        header("Location: index.php");
    }
    /* code for eliminar datos */


    /* codigo para actualizar */
if (isset($_GET['edit'])) 
    {
        $SQL = $MySQLiconn->query("SELECT * FROM biblioteca WHERE id=".$_GET['edit']);
        $getROW = $SQL->fetch_array();

    }

if (isset($_POST['update'])) 
    {
        $SQL = $MySQLiconn->query("UPDATE biblioteca SET rn='".$_POST['rn']."', tn='".$_POST['tn']."', ln='".$_POST['ln']."', gn='".$_POST['gn']."', kn='".$_POST['kn']."', zn='".$_POST['zn']."' WHERE id=".$_GET['edit']);
        header("Location: index.php");
    }

?>

