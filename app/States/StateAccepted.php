<?php
namespace App\States;

use App\Contracts\StateContract;

class StateAccepted implements StateContract
{
    private $stateId = 12;

    public function goToNextState($leadState)
    {
        return null;
    }

    public function getStateId()
    {
        return $this->stateId;
    }

    public function isFinalState()
    {
        return true;
    }
}