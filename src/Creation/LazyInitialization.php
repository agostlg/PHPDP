<?php
/**
 * 
 * 
 * @author agostinho
 * @since 6/5/13 7:57 AM
 *   
 */

namespace Creation;

/**
 * Class LazyInitialization
 * @package Creation
 */
class LazyInitialization
{
    /**
     * @var
     */
    protected $value;

    /**
     * @var
     */
    protected static $values = array();

    /**
     * @param $value
     */
    protected function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param $value
     * @return LazyInitialization
     */
    public static function createInstance($value)
    {
        if (!isset(static::$values[$value])) {
            static::$values[$value] = new LazyInitialization($value);
        }

        return static::$values[$value];
    }

    /**
     * @return int
     */
    public function getInitializedQuantity()
    {
        return count(static::$values);
    }
}
