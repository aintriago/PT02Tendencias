<!-- Column 2 start -->
<h2>Unidad</h2>
<table id="Clases_Tabla" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>#</th>
                <th>Clase</th>
                <th>Asignatura</th>
                <th>Nivel</th>
                <th>Profesor</th>
                <th>Fecha de Inicio</th>
				<th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php       
        foreach($planificacion_data as $row)    
        {
            echo "<tr>";
            echo "<td>".$row["ID_UNIDAD"]."</td>";
            echo "<td>".$row["NOMBRE_UNIDAD"]."</td>";
            echo "<td>".$row["NOMBRE_ASIGNATURA"]."</td>";
            echo "<td>".$row["NOMBRE_NIVEL"]."</td>";
            echo "<td>".$row["NOMBRE_USUARIO"]."</td>";
            echo "<td>".$row["FECHA_INICIO"]."</td>";
            echo "<td><button title='Abrir' class='Planificacion_Abrir'></button></td>";
            echo "<td><button title='Ver' class='Planificacion_Ver'></button></td>";
            echo "<td><button title='Eliminar' class='Planificacion_Elimina'></button></td>";
            echo "<td><button title='Editar' class='Planificacion_Edita'></button></td>";
            echo "<td><button title='Copiar' class='Planificacion_Copia'></button></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
</table>   