<?php
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     14:01
 * @copyright 2017 solutionDrive GmbH
 */

use violation\User;

$db = new PDO("mysql:dbname=test", "myusername", "mypassword");

/** @var User $user */
$user = new User($db);

// Display user data
$user = $user->findById(1);
echo $user->getName() . ' ' . $user->getEmail();

// Insert a new user
$newUser = new User("John Doe", "john@example.com");
$newUser->insert();

// Update a user
$newUser->setName("Bill");
$newUser->update();

// Delete a User
$newUser->delete();