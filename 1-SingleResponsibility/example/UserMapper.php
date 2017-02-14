<?php

/**
 * Created by solutionDrive GmbH
 *
 * @author    Matthias Alt <alt@solutiondrive.de>
 * @date      11/02/2017
 * @time:     13:55
 * @copyright 2017 solutionDrive GmbH
 */
class UserMapper implements UserMapperInterface
{
    private $db;
    private $table = "users";

    public function __construct($db) {
        $this->db = $db;
    }

    public function findById($id) {
        $this->db->select($this->table,
            ["id" => $id]);
        if (!$row = $this->db->fetch()) {
            return null;
        }
        $user = new User($this->db);
        $user->setId($row["id"])
            ->setName($row["name"])
            ->setEmail($row["email"]);
        return $user;
    }

    public function insert(User $user) {
        $this->db->insert($this->table, [
            "name"  => $user->getName(),
            "email" => $user->getEmail()
        ]);
    }

    public function update(User $user) {
        $this->db->update($this->table, [
            "name"  => $user->getName(),
            "email" => $user->getEmail()],
            "id = {$user->getId()}");
    }

    public function delete(User $user) {
        $this->db->delete($this->table,
            "id = {$user->getId()}");
    }
}