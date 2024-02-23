<?php
require_once './classes/Strategy/NoDiscountStrategy.php';
require_once './classes/Strategy/QuaterDiscountStrategy.php';
require_once './classes/Strategy/HalfDiscountStrategy.php';
require_once './classes/Ticket.php';

echo "<h1 style='text-align: center'>Strategy Design Pattern</h1>";

$promoteStrategy = [
    '0%'=> new NoDiscountStrategy(), 
    '25%' => new QuaterDiscountStrategy(),
    '50%' => NEW HalfDiscountStrategy()
];

$ticket = new Ticket(new NoDiscountStrategy());
$ticket->setPrice(500);

for ($i = 1; $i <= 10; $i++) {
    $randomDiscount = array_rand($promoteStrategy);
    $ticket->setPromoteStrategy($promoteStrategy[$randomDiscount]);
    echo 'Giảm giá lần '.$i.': '.$randomDiscount.'. Giá mới: '.$ticket->getPromotedPrice();
    echo '<br />';
}
