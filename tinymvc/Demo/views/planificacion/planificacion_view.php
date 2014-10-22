<body>
<?php
block("templates/header",array("Seccion" => "planificacion"));
?>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
            <?php 
            if(isset($planificacion_ind) and $planificacion_ind)
            {
            	echo block("planificacion/planificacion_clases");
            } else 
            {
            	echo block("planificacion/planificacion_main",array('planificacion_data' => $planificacion_data));
            }
            ?>
            </div>
        </div>
        <div class="col2">
			<?php 
			if(isset($planificacion_ind) and $planificacion_ind)
			{
				
			} else {
				echo block("planificacion/planificacion_menu",array("lista_prof_data" => $lista_prof_data,"lista_nivel_data" => $lista_nivel_data,"lista_asig_data" => $lista_asig_data));
			}
			?>
        </div>
    </div>
</div>
<?=block("templates/footer");?>
</body>
</html>
