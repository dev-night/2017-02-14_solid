<?php
/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     14:01
 * @copyright 2017 solutionDrive GmbH
 */

$db = new PDO("mysql:dbname=test", "myusername",
    "mypassword");
$userMapper = new UserMapper($db);

// Display user data
$user = $userMapper->findById(1);
echo $user->getName() . ' ' . $user->getEmail();

// Insert a new user
$user = new User("John Doe", "john@example.com");
$userMapper->insert($user);

// Update a user
$user = $userMapper->findById(2);
$user->setName("Jack");
$userMapper->update($user);

// Delete a user
$userMapper->delete(3);