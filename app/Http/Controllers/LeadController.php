<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\States\StateCreated;
use App\Services\StateService;

class LeadController extends Controller
{
    public function changeLeadState()
    {
        $lead = new Lead();
        $lead->amount = 5000;

        $initialState = new StateCreated();
        $leadState = new StateService($initialState);
        echo "Estoy en estado {$leadState->getLeadStateId()}<br>";
        
        while (!$leadState->isFinalState())
        {
            $leadState->changeState();
            echo "Estoy en estado {$leadState->getLeadStateId()}<br>";
        }
        exit;
    }
}
