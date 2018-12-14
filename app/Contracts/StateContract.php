<?php
namespace App\Contracts;

interface StateContract
{
    public function goToNextState($leadState);
}