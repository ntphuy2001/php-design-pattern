<?php
require_once './interface/PromoteStrategy.php';

class QuaterDiscountStrategy implements PromoteStrategy {
    function doDiscount($price)
    {
        return $price * 0.75;
    }
}