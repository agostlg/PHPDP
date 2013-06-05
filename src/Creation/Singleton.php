<?php
/**
 * @author luizgustavoagostinho
 * @since 6/3/13 4:16 PM
 *   
 */

namespace Creation;

/**
 * Class Singleton
 * @package Creation
 */
class Singleton
{
    /* @var $instance Singleton */
    private static $instance;
    protected $number = 0;

    /**
     * The constructor method is set as private to avoid calls to it
     */
    private function __construct()
    {
    }

    /**
     * The Singleton method
     *
     * @return Singleton
     */
    public static function singleton()
    {
        if (!isset(static::$instance)) {
            $c = __CLASS__;
            static::$instance = new $c;
        }

        return static::$instance;
    }

    /**
     * Prevent cloning
     */
    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}
