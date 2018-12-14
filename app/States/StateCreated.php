<?php
namespace App\States;

use App\Contracts\StateContract;
use App\States\StatePendingCustomerApproval;

class StateCreated implements StateContract
{
    private $stateId = 1;

    public function goToNextState($leadState)
    {
        return $leadState->setLeadState($this->getNextState());
    }

    private function getNextState()
    {
        return new StatePendingCustomerApproval();
    }

    public function getStateId()
    {
        return $this->stateId;
    }

    public function isFinalState()
    {
        return false;
    }
}