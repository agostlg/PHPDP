<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/7/13 8:29 PM
 *   
 */

namespace Structure\Facade;


class Transfer
{
    protected $person;
    protected $bank;

    public function __construct(Person $person, Bank $bank)
    {
        $this->bank = $bank;
        $this->person = $person;
    }

    /**
     * @param $money
     */
    public function deposit($money)
    {
        $this->person->getWallet()->subMoney($money);
        $this->bank->getAccount($this->person)->sumMoney($money);
    }

    /**
     * @param $value
     */
    public function checkout($money)
    {
        $this->person->getWallet()->sumMoney($money);
        $this->bank->getAccount($this->person)->subMoney($money);
    }

}