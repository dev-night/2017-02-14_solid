<?php
namespace example\parts;
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:07
 * @copyright 2017 solutionDrive GmbH
 */
interface EngineControlInterface
{
    public function startEngine();

    public function stopEngine();

    public function accelerate();

    public function decelerate();
}