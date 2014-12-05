<?php
/**
 * Created by PhpStorm.
 * User: Chiquis
 * Date: 21/10/14
 * Time: 05:21 PM
 */
require 'helpers.php';
require 'menu.php';
if (empty($_GET['url']))
    $_GET['url']='home';
controller($_GET['url']);

?>