<?php

namespace Tests;


use Ahmed1Amen\FlexCart\Cart;
use  PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    /** @var Cart */
    public $cart;

    /**
     * Setup the test functions with FlexCart.
     */
    public function setUp(): void
    {
        require_once __DIR__ .'/../vendor/autoload.php';

        parent::setUp();



        /* @var Cart */

    }


}
