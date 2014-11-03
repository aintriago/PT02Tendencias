<?php
IncludeOnReady("home_leyenda_onReady");
if(!isset($view_calendario) or !$view_calendario)
{
?>
<h2>Leyenda</h2>
<table>
  <tr>
    <td>Reporte Torta</td>
    <td><div id="colorpicker1" style="cursor: pointer;background-color: #3289c7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
  <tr>
    <td>Reporte Barra</td>
    <td><div id="colorpicker2" style="cursor: pointer;background-color: #44d134">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
  <tr>
    <td>Reuniones profesores</td>
    <td><div id="colorpicker3" style="cursor: pointer;background-color: #f50505">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
</table>
<?php 
}
?>