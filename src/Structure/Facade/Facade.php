<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/7/13 9:46 PM
 *   
 */

namespace Structure\Facade;


class Facade
{
    protected $banks;
    protected $persons;

    /**
     * @param $name
     */
    public function createBank($name)
    {
        $this->banks[$name] = new Bank($name);
    }

    /**
     * @param $name
     * @param $birthday
     * @param $money
     */
    public function createPerson($name, $birthday, $money)
    {
        $this->persons[$name] = new Person($name, $birthday, $money);
    }

    /**
     * @param $personName
     * @param $bankName
     * @param $money
     */
    public function transferToBank($personName, $bankName, $money)
    {
        $person = $this->persons[$personName];
        $bank = $this->banks[$bankName];
        $transfer = new Transfer($person, $bank);
        $transfer->deposit($money);
    }

    /**
     * @param $personName
     * @param $bankName
     * @param $money
     */
    public function transferToPerson($personName, $bankName, $money)
    {
        $person = $this->persons[$personName];
        $bank = $this->banks[$bankName];
        $transfer = new Transfer($person, $bank);
        $transfer->checkout($money);
    }

}