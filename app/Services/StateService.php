<?php

namespace App\Services;

use App\Lead;

class StateService
{
    private $leadState = NULL;

    public function __construct($leadState)
    {
        $this->setLeadState($leadState);
    }

    public function getLeadState()
    {
        return $this->leadState;
    }

    public function getLeadStateId()
    {
        return $this->leadState->getStateId($this);
    }

    public function changeState()
    {
        return $this->leadState->goToNextState($this);
    }

    public function isFinalState()
    {
        return $this->leadState->isFinalState();
    }

    public function setLeadState($leadState)
    {
        $this->leadState = $leadState;
    }
}
