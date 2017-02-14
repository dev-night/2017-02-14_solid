<?php
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     21:39
 * @copyright 2017 solutionDrive GmbH
 */

namespace violation;


class DerivedWithViolation extends DerivedWithoutViolation
{
    public function doSomeThing()
    {
        return $this->doSomethingElse();
    }
}