<?php
/**
 * 
 * 
 * @author Luiz Gustavo Agostinho <luiz.gustavo.xd@gmail.com>
 * @since 6/7/13 7:36 PM
 *   
 */

namespace Structure\Facade;


use Structure\Facade\Bank\Account;
use Structure\Facade\Bank\AccountCollection;

class Bank
{
    protected $name;
    protected $accountCollection;

    public function __construct($name)
    {
        $this->name = $name;
        $this->accountCollection = new AccountCollection();
    }

    public function newClient(Person $client, $money = 0)
    {
        $account = new Account($client, $money);
        $this->accountCollection->add($account);
    }

    public function getAccount(Person $client)
    {
        while ($this->accountCollection->valid()) {
            if ($this->accountCollection->current()->getOwner() == $client) {
                return $this->accountCollection->current();
            }
            $this->accountCollection->next();
        }
        return false;
    }
}
