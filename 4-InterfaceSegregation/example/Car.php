<?php
namespace example;
use Vehicle;

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:18
 * @copyright 2017 solutionDrive GmbH
 */
class Car extends Vehicle
{
    public function poundPedalOnTheGround()
    {
        $this->engineControl->accelerate();
    }
}