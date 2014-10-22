<?php
IncludeOnReady("mantenedor_onReady");
?>
<!-- Column 2 start -->
<h2>Home</h2>
<p>Mantenedor de una tabla </p>
<p><button id="newbutton">Nuevo</button></p>
<!-- Column 2 end -->
<div id="dialog" title="Nuevo Registro" style="display: none"></div>

<table id="Mantenedor" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Mail</th>
                <th>Fecha Nacimiento</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
        <?php       
        foreach($Usuarios as $row)    
        {
            echo "<tr>";
            echo "<td>".$row["nombre"]."</td>";
            echo "<td>".$row["mail"]."</td>";
            echo "<td>".$row["fecha_nacimiento"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
</table>        
