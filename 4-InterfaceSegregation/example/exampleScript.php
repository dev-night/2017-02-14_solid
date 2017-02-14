<?php
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:23
 * @copyright 2017 solutionDrive GmbH
 */

$car = new \example\Car(
    new \example\parts\carParts\CarEngine(),
    new \example\parts\carParts\CarAudio(),
    new \example\parts\carParts\CarLighting(),
    new \example\parts\carParts\CarTransmission()
);

$car->poundPedalOnTheGround();