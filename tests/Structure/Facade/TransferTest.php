<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/10/13 8:05 PM
 *   
 */

namespace PHPDP\Tests\Structure;

use Structure\Facade\Bank;
use Structure\Facade\Person;
use Structure\Facade\Transfer;

/**
 * Class TransferTest
 * @package PHPDP\Tests\Structure
 */
class TransferTest extends \PHPUnit_Framework_TestCase
{

    public function testClassExists()
    {
        $this->assertTrue(class_exists('Structure\Facade\Transfer'));
    }

    public function testDeposit()
    {
        $bank = new Bank('xiboxibo');
        $person = new Person('Xuxa', 100);
        $transfer = new Transfer($person, $bank);

        $bank->newClient($person);
        $transfer->deposit(50);
        $moneyInAccount = $bank->getAccount($person)->getMoney();
        $this->assertEquals(50, $moneyInAccount);
    }

    public function testCheckout()
    {
        $bank = new Bank('xiboxibo');
        $person = new Person('Xuxa', 100);
        $transfer = new Transfer($person, $bank);

        $bank->newClient($person, 50);
        $transfer->checkout(50);
        $moneyInWallet = $person->getWallet()->getMoney();
        $this->assertEquals(150, $moneyInWallet);
    }
}
