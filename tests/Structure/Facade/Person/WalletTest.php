<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/10/13 8:06 PM
 *   
 */

namespace PHPDP\Tests\Structure\Person;

use \Structure\Facade\Person\Wallet;

class WalletTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Wallet
     */
    public $wallet;

    public function setUp()
    {
        $this->wallet = new Wallet(100);
    }


    /**
     * Sum money from wallet
     */
    public function testSumMoney()
    {
        $actualMoney = $this->wallet->getMoney();
        $value = 10;
        $this->wallet->sumMoney($value);
        $this->assertEquals($actualMoney + $value, $this->wallet->getMoney());
    }


    /**
     * Subtract money from wallet
     */
    public function testSubMoney()
    {
        $actualMoney = $this->wallet->getMoney();
        $value = 10;
        $this->wallet->subMoney($value);
        $this->assertEquals($actualMoney - $value, $this->wallet->getMoney());
    }
}
