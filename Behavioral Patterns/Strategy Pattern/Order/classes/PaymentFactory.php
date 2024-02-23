<<?php
require_once './classes/PayPalPayment.php';
/**
 * This class helps to produce a proper strategy object for handling a payment.
 */
class PaymentFactory
{
    /**
     * Get a payment method by its ID.
     *
     * @param $id
     * @return PaymentMethod
     * @throws \Exception
     */
    public static function getPaymentMethod(string $id): PaymentMethod
    {
        switch ($id) {
            case "cc":
                return new CreditCardPayment();
            case "paypal":
                return new PayPalPayment();
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}

/**
 * The Strategy interface describes how a client can use various Concrete
 * Strategies.
 *
 * Note that in most examples you can find on the Web, strategies tend to do
 * some tiny thing within one method. However, in reality, your strategies can
 * be much more robust (by having several methods, for example).
 */