<body>
<?php
block("templates/header");
?>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
                <?=block("perfil/perfil_main");?>
            </div>
        </div>
        <div class="col2">
        <?php
        block("perfil/perfil_menu");
        ?>
        </div>
    </div>
</div>
<?=block("templates/footer");?>
</body>
</html>
