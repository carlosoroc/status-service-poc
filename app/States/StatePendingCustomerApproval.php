<?php
namespace App\States;

use App\Contracts\StateContract;
use App\States\StateAccepted;

class StatePendingCustomerApproval implements StateContract
{
    private $stateId = 11;

    public function goToNextState($leadState)
    {
        return $leadState->setLeadState($this->getNextState());
    }

    private function getNextState()
    {
        return new StateAccepted();
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