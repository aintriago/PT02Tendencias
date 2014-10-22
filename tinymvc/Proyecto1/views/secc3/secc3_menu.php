<!-- Column 1 start -->
<?php
switch($selected)
{
    case "mantenedor":
        $Home = "Mantenedor1";
        $Secc4 = "<a href='/Proyecto1/secc3/secc4'>Calendario1</a>";
        $Secc5 = "<a href='/Proyecto1/secc5'>Secc5</a>";
        break;
    case "secc4";
        $Home = "<a href='/Proyecto1/secc3'>Mantenedor1</a>";
        $Secc4 = "Calendario1";
        $Secc5 = "<a href='/Proyecto1/secc5'>Secc5</a>";
        break;
    case "secc5";
	    $Home = "<a href='/Proyecto1/secc3'>Mantenedor1</a>";
	    $Secc4 = "<a href='/Proyecto1/secc3/secc4'>Calendario1</a>";;
	    $Secc5 = "Secc5";
	    break;    	        
}
?>
<h2>Menu</h2>
<p>
<ul><?=$Home;?></ul>
<ul><?=$Secc4;?></ul>
<ul><?=$Secc5;?></ul>
</p>
<!-- Column 1 end -->