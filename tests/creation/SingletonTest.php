<?php
/**
 * @author luizgustavoagostinho
 * @since 6/3/13 4:17 PM
 */

namespace PHPDP\Tests\Creation;

use Creation\Singleton;

/**
 * Class SingletonTest
 * @package PHPDP\Tests\Creation
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * Test class exists
     * 
     * @return void
     *
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists('Creation\Singleton'));
    }

    /**
     * Create two objects of Singleton class instance and check
     * if the value set on obj1 is the same get on obj2
     */
    public function testJustOneInstanceFromSingleton()
    {
        $obj1 =  Singleton::singleton();
        $obj1->setNumber(1);

        $obj2 =  Singleton::singleton();
        $number = $obj2->getNumber();

        $this->assertEquals(1, $number);
    }
}
