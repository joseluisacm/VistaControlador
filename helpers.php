<?php
/**
 * Created by PhpStorm.
 * User: Chiquis
 * Date: 21/10/14
 * Time: 05:22 PM
 */
function view ($plantilla,$variable=array()){
    extract($variable);
    require ('Views/'.$plantilla.'.tpl.php');
}
function controller ($nombre){
    if (empty($nombre)){
        $nombre='home';
    }

    $archivo="Controllers/$nombre.php";

    if (file_exists($archivo))
        require($archivo);

        else
            echo "Error archivo no encontrado";

}