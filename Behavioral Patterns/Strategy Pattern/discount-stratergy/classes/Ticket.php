<?php

class Ticket
{
    private $_promoteStrategy;
    private $_price;
    private $_name;

    /**
     * Get the value of _promoteStrategy
     */
    public function get_PromoteStrategy()
    {
        return $this->_promoteStrategy;
    }

    /**
     * Set the value of _promoteStrategy
     *
     * @return  self
     */
    public function setPromoteStrategy($promoteStrategy)
    {
        $this->_promoteStrategy = $promoteStrategy;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->_price = $price;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    public function __construct($promoteStrategy)
    {   
        $this->_promoteStrategy = $promoteStrategy;
    }

    public function getPromotedPrice()
    {
        return $this->_promoteStrategy->doDiscount($this->_price);
    }
}
