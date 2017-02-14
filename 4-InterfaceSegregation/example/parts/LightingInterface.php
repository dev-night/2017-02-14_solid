<?php
namespace example\parts;
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:10
 * @copyright 2017 solutionDrive GmbH
 */
interface LightingInterface
{
    public function lightsOn();

    public function lightsOff();

    public function signalLeft();

    public function signalRight();
}