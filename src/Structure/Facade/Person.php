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
    protected $birthday;
    protected $wallet;

    /**
     * @param $name
     * @param $birthday
     * @param $money
     */
    public function __construct($name, $birthday, $money)
    {
        $this->name = $name;
        $this->name = $birthday;
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