<?php
namespace example\parts;
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     22:08
 * @copyright 2017 solutionDrive GmbH
 */
interface AudioInterface
{
    public function startRadio();

    public function stopRadio();

    public function ejectCd();
}