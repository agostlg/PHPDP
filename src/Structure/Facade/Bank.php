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
use Structure\Facade\Bank\Accounts;

class Bank
{
    protected $name;
    protected $accounts;

    public function __construct($name)
    {
        $this->name = $name;
        $this->accounts = new Accounts();
    }

    public function newClient(Person $client, $money)
    {
        $account = new Account($client, $money);
        $this->accounts->add($account);
    }

    public function getAccount(Person $client)
    {
        while ($this->accounts->valid()) {
            if ($this->accounts->current()->getOwner() == $client) {
                return $this->accounts->current();
            }
            $this->accounts->next();
        }
        return false;
    }
}
