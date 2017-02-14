<?php

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     21:55
 * @copyright 2017 solutionDrive GmbH
 */
interface VehicleInterface
{
    public function startEngine();

    public function stopEngine();

    public function accelerate();

    public function decelerate();

    public function lightsOn();

    public function lightsOff();

    public function signalLeft();

    public function signalRight();

    public function changeGear();

    public function startRadio();

    public function stopRadio();

    public function ejectCd();

    /**
     * This List could go on forever
     */
}