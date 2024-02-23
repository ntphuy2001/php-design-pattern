<?php
require_once './interface/Sharp.php';

class RectangleAdapter implements Sharp{
    private LegacyRectangle $_legacyRectangle;
    public function __construct(LegacyRectangle $legacyRectangle) {
        $this->_legacyRectangle = $legacyRectangle;
    }

    public function draw($x1, $y1, $x2, $y2) {
        $x = min($x1, $x2);
        $y = min($y1, $y2);
        $width = abs($x2 - $x1);
        $height = abs($y2 - $y1);

        $this->_legacyRectangle->draw($x, $y, $width, $height);
    }
}