<?php
require_once './classes/LineAdapter.php';
require_once './classes/LegacyLIne.php';
require_once './classes/RectangleAdapter.php';
require_once './classes/LegacyRectangle.php';

$sharps = array(new LineAdapter(new LegacyLIne), new RectangleAdapter(new LegacyRectangle));

$x1 = 5; 
$y1 = 10;
$x2 = -3;
$y2 = 2;

foreach ($sharps as $sharp):
    $sharp->draw($x1, $y1, $x2, $y2);
endforeach;