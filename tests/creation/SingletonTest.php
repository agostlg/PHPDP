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
        $singleton = new Singleton();
        $this->assertInstanceOf('Creation\Singleton', $singleton);
    }
}
