<?php
require_once 'RootClass.php';
require_once 'FirstInputClass.php';
require_once 'DerivedWithoutViolation.php';
require_once 'DerivedWithViolation.php';
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      13/02/2017
 * @time:     20:37
 * @copyright 2017 solutionDrive GmbH
 */

$rootClass = new \violation\RootClass(new \violation\FirstInputClass());

$rootClass->doSomethingImportant();

$rootClass = new \violation\RootClass(new \violation\DerivedWithoutViolation());

$rootClass->doSomethingImportant();

$rootClass = new \violation\RootClass(new \violation\DerivedWithViolation());
$rootClass->doSomethingImportant();
