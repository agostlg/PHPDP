<?php
/**
 * 
 * 
 * @author agostinho
 * @since 6/5/13 8:22 AM
 *   
 */

namespace PHPDP\Tests\Creation;

use Creation\LazyInitialization;

/**
 * Class LazyInitializationTest
 * @package PHPDP\Tests\Creation
 */
class LazyInitializationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test class exists
     *
     * @return void
     *
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists('Creation\LazyInitialization'));
    }

    /**
     *  Test the creation of three objects where 2 have the same value.
     *  The result is two objects identical and one different.
     */
    public function testLazyInitializationOfThreeObjects()
    {
        $obj1 = LazyInitialization::createInstance('instance');
        $obj2 = LazyInitialization::createInstance('instance');
        $obj3 = LazyInitialization::createInstance('different instance');

        //assert that we have only two instances for three objects created
        $this->assertEquals(2, $obj3->getInitializedQuantity());

        //assert that we have two objects identical
        $this->assertEquals($obj1, $obj2);

        //assert that $obj3 is diferent.
        $this->assertNotEquals($obj1, $obj3);

    }
}
