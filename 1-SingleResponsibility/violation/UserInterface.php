<?php
namespace violation;
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     13:50
 * @copyright 2017 solutionDrive GmbH
 */
interface UserInterface
{
    public function setId($id);
    public function getId();

    public function setName($name);
    public function getName();

    public function setEmail($email);
    public function getEmail();

    public function findById($id);
    public function insert();
    public function update();
    public function delete();
}