<?php
namespace violation;
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      12/02/2017
 * @time:     11:08
 * @copyright 2017 solutionDrive GmbH
 */
class RootClass
{
    protected $_inputClass;

    public function __construct(FirstInputClass $inputClass)
    {
        $this->_inputClass = $inputClass;
    }
    public function doSomethingImportant()
    {
        return assert($this->_inputClass->doSomeThing() == 'Something');
    }
}