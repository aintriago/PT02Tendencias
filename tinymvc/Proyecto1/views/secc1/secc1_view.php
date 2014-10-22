<body>
<?=block("templates/header",array('Seccion' => 'seccion1'));?>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
                <?=block("secc1/secc1_main");?>
            </div>
        </div>
        <div class="col2">
            <?=block("secc1/secc1_menu",$Menu);?>
        </div>
    </div>
</div>
<?=block("templates/footer");?>
</body>
</html>
