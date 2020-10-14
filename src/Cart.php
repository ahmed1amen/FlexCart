<?php


namespace Ahmed1Amen\FlexCart;

/**
 * Class Cart.
 */
class Cart
{

    public $tax;
    public $items;
    public $instance;
    public $coupons = [];
    public $attributes = [];
    public $currencyCode;

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        $this->tax = 55;
        $this->currencyCode = 'USD';
    }


    /**
     * Creates a CartItem and then adds it to cart.
     *
     * @param            $itemID
     * @param  null  $name
     * @param  int  $qty
     * @param  string  $price
     * @param  bool|false  $lineItem
     *
     * @return CartItem
     * @throws ModelNotFound
     *
     */
    public function add(
        $itemID,
        $name = null,
        $qty = 1,
        $price = '0.00',
        $lineItem = false
    ) {

        $itemModel = $itemID;
        $itemID = uniqid('php_');


        $item = $this->addItem(new CartItem(
            $itemID,
            $name,
            $qty,
            $price,
            $lineItem
        ));

        $this->update();

        return $this->getItem($item->getHash());
    }

}
