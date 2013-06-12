<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/10/13 8:05 PM
 *   
 */

namespace PHPDP\Tests\Structure;

use Structure\Facade\Person;

/**
 * Class PersonTest
 */
class PersonTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test class exists
     *
     * @return void
     *
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists('Structure\Facade\Person'));
    }

    /**
     *
     */
    public function testCreatePerson()
    {
        $person = new Person('Bete', 100);

        $this->isInstanceOf('Structure\Facade\Person', $person);
    }

    /**
     *
     */
    public function testCheckWalletMoney()
    {
        $person = new Person('Bete', 100);
        $this->assertEquals(100, $person->getWallet()->getMoney());
    }


}
