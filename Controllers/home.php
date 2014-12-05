<?php
/**
 * Created by PhpStorm.
 * User: Chiquis
 * Date: 21/10/14
 * Time: 05:23 PM
 */
$titulo='Bienvenido al Home';
$contenido='..........';

$variables=array('titulo'=>$titulo, 'contenido'=>$contenido); //serializar variables

view('home',$variables)

?>

