<body>
<?php
block("templates/header");
?>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
           <?php
            if(isset($new_event) and $new_event)
            {
            	echo block("home/home_new");
            } else {
            	echo block("home/home_main");
            }
            ?>
            </div>
        </div>
        <div class="col2">
        	<?php 
        	if(isset($new_event) and $new_event)
        	{
        		echo block("home/home_leyenda",array("view_calendario" => TRUE));
        		echo block("home/home_menu",array("view_calendario" => TRUE));
        		
        	} else {
        		echo block("home/home_leyenda");
        		echo block("home/home_menu");
        	}
        	?>
        </div>
    </div>
</div>
<?=block("templates/footer");?>
</body>
</html>
