<?php
require_once './interface/Sharp.php';

class LegacyRectangle implements Sharp {
    public function draw($x, $y, $w, $h) {
        echo 'Draw rectangle <br/>';
    }
}