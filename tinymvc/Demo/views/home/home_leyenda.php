<?php
IncludeOnReady("home_leyenda_onReady");
if(!isset($view_calendario) or !$view_calendario)
{
?>
<h2>Reportes</h2>
<table>
  <tr>
    <td>Reportes 1</td>
    <td><div id="colorpicker1" style="cursor: pointer;background-color: #3289c7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
  <tr>
    <td>Reportes 2</td>
    <td><div id="colorpicker2" style="cursor: pointer;background-color: #44d134">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
  <tr>
    <td>Reportes 3</td>
    <td><div id="colorpicker3" style="cursor: pointer;background-color: #f50505">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
</table>
<?php 
}
?>