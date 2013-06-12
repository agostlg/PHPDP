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

class BankTest extends \PHPUnit_Framework_TestCase
{

    public function testClassExists()
    {
        $this->assertTrue(class_exists('Structure\Facade\Bank'));
    }

    public function testCreateBank()
    {
        $bank = new Bank('XiqueBola');
        $this->isInstanceOf('Structure\Facade\Bank', $bank);
    }

    public function testCreateNewClientAndGetTheCreatedAccount()
    {
        $bank = new Bank('XiliqueBola');
        $client = new Person('Joao', 100);

        $bank->newClient($client);

        $accountOwner = $bank->getAccount($client)->getOwner();
        $this->assertEquals($client, $accountOwner);
    }
}
