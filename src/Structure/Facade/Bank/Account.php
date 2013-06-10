<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/7/13 7:59 PM
 *   
 */

namespace Structure\Facade\Bank;


use Structure\Facade\Person;

class Account
{
    protected $number;
    protected $money = 0;
    protected $owner;

    /**
     * @param $money int
     * @param Person $owner
     */
    public function __construct(Person $owner, $money)
    {
        $this->owner = $owner;
        $this->money = $money;
        $this->number = $this->generateNumber();
    }

    /**
     * @param $money
     */
    public function sumMoney($money)
    {
        $this->money += $money;
    }

    /**
     * @param $money
     */
    public function subMoney($money)
    {
        $this->money -= $money;
    }

    /**
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Generate Account Number
     * @return string
     */
    protected function generateNumber()
    {
        $date = new \DateTime('now');
        $number = $date->format('dmYu');

        return $number;
    }

    /**
     * Returns the owner of the account
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
