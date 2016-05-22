<?php
/**
 * Created by PhpStorm.
 * User: Mitra
 * Date: 21/05/2016
 * Time: 16:50
 */

use \App\Autoloader;

require '../app/Autoloader.php';

Autoloader::register();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'single') {
    require '../pages/single.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php';
