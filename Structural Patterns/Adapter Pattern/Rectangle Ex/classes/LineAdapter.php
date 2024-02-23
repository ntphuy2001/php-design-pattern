<?php
require_once './interface/Sharp.php';
class LineAdapter implements Sharp {
    private LegacyLine $_legacyLine;
    public function __construct(LegacyLine $legacyLine) {
        $this->_legacyLine = $legacyLine;
    }

    
    public function draw($x1, $y1, $x2, $y2) {
        $this->_legacyLine->draw($x1, $y1, $x2, $y2);
    }
}