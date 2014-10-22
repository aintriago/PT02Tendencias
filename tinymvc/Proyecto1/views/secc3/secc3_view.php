<body>
<?php
block("templates/header",array('Seccion' => 'seccion3'));
?>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
                <?=block("secc3/secc3_main",array('Usuarios' => $Usuarios));?>
            </div>
        </div>
        <div class="col2">
        <?php
        block("secc3/secc3_menu",array('selected'=> 'mantenedor'));
        ?>
        </div>
    </div>
</div>
<?=block("templates/footer");?>
</body>
</html>
