<?php
namespace violation;
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      12/02/2017
 * @time:     11:11
 * @copyright 2017 solutionDrive GmbH
 */
class DerivedWithoutViolation extends FirstInputClass
{
    public function doSomeThing()
    {
        $this->doSomethingElse();
        return parent::doSomeThing();
    }

    public function doSomethingElse()
    {
        return 'done something else';
    }
}