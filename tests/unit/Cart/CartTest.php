<?php

namespace Tests\Unit;


use Ahmed1Amen\FlexCart\Cart;
use Ahmed1Amen\FlexCart\Tests\FlexCartTestTrait;
use Tests\TestCase;

class CartTest extends TestCase
{
    /** @var Cart */
    public $cart;


    /**
     * Easy way to add an item for many tests.
     *
     * @param  int  $qty
     * @param  int  $price
     * @param  bool  $taxable
     * @param  array  $options
     *
     * @return mixed
     */
    private function addItem($qty = 1, $price = 1, $taxable = true, $options = [])
    {
        return $this->cart->add(
            'itemID',
            'Testing Item',
            $qty,
            $price,
            $taxable
        );
    }

    /**
     * Test if we can add an item to the cart.
     */
    public function testAddItem()
    {

        $cartItem = $this->addItem();




        $this->addItem();

        $this->assertEquals(1, $this->cart->count(false));
        $this->assertEquals(2, $this->cart->count());
    }


}
