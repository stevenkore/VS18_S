<?php
/**
 * Created by PhpStorm.
 * User: steven.kore
 * Date: 07.02.2019
 * Time: 9:51
 */
require_once 'lib/fnk.php';
require_once 'menus/menu.php';
// lehe sisu
// päis - header ja muud vajalikud osad
pais();
// menüü elemendid - menu funktsioon kasutab menu_element funktsiooni sisu loomiseks
menu(array(
    'praed' => $praed,
    'supid' => $supid,
    'magus' => $magusad,
    'joogid' => $joogid
));
// jalus - kõik JS asjad
jalus();
?>