<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <center>
        <br>
        <br>
        <div id="form">
            <form method="post">
                <table width="100%" border="1" cellpading="15">
                    <tr>
                        <td>
                            <input type="text" name="rn" placeholder="año" value="<?php if(isset($_GET['edit'])) echo $getROW['rn']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="tn" placeholder="autor" value="<?php if(isset($_GET['edit'])) echo $getROW['tn']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="ln" placeholder="titulo" value="<?php if(isset($_GET['edit'])) echo $getROW['ln']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="gn" placeholder="URL" value="<?php if(isset($_GET['edit'])) echo $getROW['gn']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="kn" placeholder="especialidad" value="<?php if(isset($_GET['edit'])) echo $getROW['kn']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="zn" placeholder="editorial" value="<?php if(isset($_GET['edit'])) echo $getROW['zn']; ?>">
                        </td>
                    </tr>
                        <td>
                            <?php
                            if (isset($_GET['edit'])) {
                                ?>
                                <button type="submit" name="update">Editar</button>
                                <?php
                            }else{
                                ?>
                                <button type="submit" name="save">Registrar</button>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>                     
                </table>
            </form>
        </div>
            <br><br>
        <div class="">
        <table width="50%" border="1" cellpadding="15"  name='biblioteca'>
                <?php
                $res = $MySQLiconn->query("SELECT * FROM biblioteca");
                while ($row=$res->fetch_array()) {
                    ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>                    
                    <td><?php echo $row['rn']; ?></td>
                    <td><?php echo $row['tn']; ?></td>
                    <td><?php echo $row['ln']; ?></td>
                    <td><?php echo $row['gn']; ?></td>
                    <td><?php echo $row['kn']; ?></td>
                    <td><?php echo $row['zn']; ?></td>
                    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Confirmar eliminacion')">Eliminar</a></td>
                    <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Confirmar edicion')">Editar</a></td>
                    <td><a href="<?php echo $row['gn'];?> " target="blank">Leer libro</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
            
    </center>
</body>
</html>