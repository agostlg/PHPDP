<?php
/**
 * 
 * 
 * @author agostinho
 * @since 6/7/13 7:27 PM
 *   
 */

namespace Structure\Facade;

use Structure\Facade\Person\Wallet;

class Person
{
    protected $name;
    protected $wallet;

    /**
     * @param $name
     * @param $money
     */
    public function __construct($name, $money = 0)
    {
        $this->name = $name;
        $this->wallet = new Wallet($money);
    }

    /**
     * @return Wallet
     */
    public function getWallet()
    {
        return $this->wallet;
    }

}