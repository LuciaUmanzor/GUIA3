<?php include './clases/Coneccion.php';?>

        <form action="manejadorAlumno.php?accion=save" method="post">
             <table>
            <tr>
                <td>
                    Seccion: 
                </td>
                <td>
                    <select name='seccion'>
                      <option value=""></option>
                      <?php
                $sql = "SELECT id,nombre FROM seccion;";
                $datos = consultaD($con, $sql);
                foreach ($datos as $value) {
                     print "<option value='";
                     print $value['id'];
                     print "'>";
                     print "</option";
                }
            ?>

              </select>
        </td>
       </tr>
               