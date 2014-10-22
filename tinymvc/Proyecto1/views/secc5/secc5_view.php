<body>
<?php
block("templates/header",array('Seccion' => 'seccion3'));
?>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
                <?=block("secc5/secc5_main");?>
            </div>
        </div>
        <div class="col2">
        <?php
        block("secc3/secc3_menu",array('selected'=> 'secc5'));
        ?>
        </div>
    </div>
</div>
<?=block("templates/footer");?>
</body>
</html>
