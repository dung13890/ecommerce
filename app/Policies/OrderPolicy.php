<?php

namespace App\Policies;

use App\Eloquent\User;
use App\Eloquent\Order;

class OrderPolicy extends AbstractPolicy
{
    public function read(User $user, Order $ability)
    {
        if (!$this->checkAbility($user, __FUNCTION__, $ability)) {
            return false;
        }

        return true;
    }

    public function write(User $user, Order $ability)
    {
        if (!$this->checkAbility($user, __FUNCTION__, $ability)) {
            return false;
        }

        return true;
    }
}
