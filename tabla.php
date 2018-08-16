<?php 
    require_once ("clases/conexion.php");
    
    $conexion= new Conectar();
    $sql="SELECT * from t_juegos;";
    $result=$conexion->query($sql);
?>
<div>
    <table class="table table-hover table-condensed" id="iddatatable">
        <thead style="background-color: #dc3545; color: white; font-weight: bold">
            <tr>
                <td>Nombre</td>
                <td>Año</td>
                <td>Empresa</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tfoot style="background-color: #ccc; color: white; font-weight: bold">
            <tr>
                <td>Nombre</td>
                <td>Año</td>
                <td>Empresa</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </tfoot>
        <tbody>
            <?php 
                while($mostrar=$result->fetch_row()):
            ?>
            <tr>
                <td><?php echo $mostrar[1]?></td>
                <td><?php echo $mostrar[2]?></td>
                <td><?php echo $mostrar[3]?></td>
                <td style="text-align: center;">
                    <span class="btn btn-warning btn-xs">
                        <span class="fas fa-edit"></span>
                    </span>
                    
                </td>
                <td style="text-align: center;">
                    <span class="btn btn-warning btn-xs">
                        <span class="fas fa-trash"></span>
                    </span>
                </td>
            </tr>
            <?php
                endwhile;
            ?>
        </tbody>
    </table>

    
