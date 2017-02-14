<?php

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     13:54
 * @copyright 2017 solutionDrive GmbH
 */
interface UserMapperInterface
{
    public function findById($id);
    public function insert();
    public function update();
    public function delete();
}