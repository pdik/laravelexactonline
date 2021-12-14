<?php

namespace Pdik\LaravelExactOnline\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Picqer\Financials\Exact\Account;

class AccountsUpdated
{
    use SerializesModels;

    public $account;

    public function __construct(Account $account)
    {
        $this->account = $account;
    }
}