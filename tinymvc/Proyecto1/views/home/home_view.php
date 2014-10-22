<body>
<?php
block("templates/header");
?>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
            <?=block("home/home_main");?>
            </div>
        </div>
        <div class="col2">
            <?=block("home/home_menu");?>
        </div>
    </div>
</div>
<?=block("templates/footer");?>
</body>
</html>
