<?php
declare(strict_types=1);

/**
 * Punto de entrada retrocompatible para entornos PHP / XAMPP.
 * Sirve directamente la interfaz 100% client-side (index.html), garantizando que
 * ningún documento ni dato personal sea almacenado en el servidor web público.
 */
header('Content-Type: text/html; charset=utf-8');
readfile(__DIR__ . '/index.html');
