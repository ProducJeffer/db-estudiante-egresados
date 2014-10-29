<?php
/*FUNCIONES CECH*/

function rfecha_ymd($f)
{
 $dia = substr($f, 0, 2);
 $mes = substr($f, 3, 2);
 $ano = substr($f, -4);
 $f2 = $ano.'-'. $mes .'-'.$dia ;
 return $f2; }
 
 function rfecha_dmy($f)
{
$dia = substr($f, -2);
$mes = substr($f, -5, 2);
$ano = substr($f, 0,4);
$f2 = $dia.'/'.$mes.'/'.$ano;
 return $f2; }
?>