<?php
include_once "convierte.php";

/**
 * numeros romanos hasta 3999
 * Write by Emmanuel Lucio Urbina
 */

$entrada = strtoupper("MMMCMXCIX"); // 3999 ARABIC

$largo = strlen($entrada);

Romano($largo, $entrada);

