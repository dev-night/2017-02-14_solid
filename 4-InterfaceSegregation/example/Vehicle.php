<?php
use example\parts\AudioInterface;
use example\parts\EngineControlInterface;
use example\parts\LightingInterface;
use example\parts\TransmissionInterface;

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:10
 * @copyright 2017 solutionDrive GmbH
 */
abstract class Vehicle
{
    protected $engineControl;
    protected $audio;
    protected $lights;
    protected $transmission;

    public function __construct(
        EngineControlInterface $engineControl,
        AudioInterface $audio,
        LightingInterface $lighting,
        TransmissionInterface $transmission
    ) {
        $this->engineControl = $engineControl;
        $this->audio = $audio;
        $this->lights = $lighting;
        $this->transmission = $transmission;
    }

}