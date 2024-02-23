<?php
require_once './interface/PromoteStrategy.php';

class NoDiscountStrategy implements PromoteStrategy {
    function doDiscount($price)
    {
        return $price;
    }
}