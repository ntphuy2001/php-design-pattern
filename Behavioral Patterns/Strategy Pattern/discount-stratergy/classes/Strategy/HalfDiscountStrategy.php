<?php
require_once './interface/PromoteStrategy.php';

class HalfDiscountStrategy implements PromoteStrategy {
    function doDiscount($price)
    {
        return $price * 0.5;
    }
}