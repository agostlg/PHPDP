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

    /**
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     *
     * Sum money to wallet
     *
     * @param $money
     * @return $this
     */
    public function sumMoney($money)
    {
        $this->money += $money;
        return $this;
    }

    /**
     * @param $money
     * @return bool|self
     */
    public function subMoney($money)
    {
        if ($money > $this->money) {
            return false;
        }
        $this->money -= $money;
        return $this;
    }
}
