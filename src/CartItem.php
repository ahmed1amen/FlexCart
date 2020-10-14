<?php

namespace Ahmed1Amen\FlexCart;

/**
 * Class CartItem.
 *
 * @property int id
 * @property int qty
 * @property float tax
 * @property float price
 * @property string name
 * @property array options
 * @property bool taxable
 */
class CartItem
{


    public $lineItem;
    public $discount = 0;
    public $active = true;
    public $subItems = [];
    public $couponInfo = [];
    public $currencyCode;
    protected $itemHash;

    /**
     * CartItem constructor.
     *
     * @param  $id
     * @param  $name
     * @param  int  $qty
     * @param  string  $price
     * @param  array  $options
     * @param  bool  $taxable
     * @param  bool|false  $lineItem
     */
    public function __construct($id, $name, $qty, $price, $options = [], $taxable = true, $lineItem = false)
    {
        $this->id = $id;
        $this->qty = $qty;
        $this->name = $name;
        $this->taxable = $taxable;
        $this->lineItem = $lineItem;
        $this->price = ( intval($price));
        $this->tax = 00;
    }

}
