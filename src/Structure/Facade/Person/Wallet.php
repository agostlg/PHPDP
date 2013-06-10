<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/7/13 8:51 PM
 *   
 */

namespace Structure\Facade\Person;


class Wallet
{
    protected $money = 0;

    public function __construct($money)
    {
        $this->money = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function sumMoney($money)
    {
        $this->money += $money;
    }

    public function subMoney($money)
    {
        if ($money > $this->money) {
            return false;
        }
        $this->money -= $money;
    }
}
