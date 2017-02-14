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
class User implements UserInterface
{
    private $id;
    private $name;
    private $email;
    private $db;
    private $table = "users";

    public function __construct($db) {
        $this->db = $db;
    }

    public function setId($id) {
        if ($this->id !== null) {
            throw new BadMethodCallException(
                "The user ID has been set already.");
        }
        if (!is_int($id) || $id < 1) {
            throw new InvalidArgumentException(
                "The user ID is invalid.");
        }
        $this->id = $id;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        if (strlen($name) < 2 || strlen($name) > 30) {
            throw new InvalidArgumentException(
                "The user name is invalid.");
        }
        $this->name = $name;
        return $this;
    }

    public function getName() {
        if ($this->name === null) {
            throw new UnexpectedValueException(
                "The user name has not been set.");
        }
        return $this->name;
    }

    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                "The user email is invalid.");
        }
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        if ($this->email === null) {
            throw new UnexpectedValueException(
                "The user email has not been set.");
        }
        return $this->email;
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

    public function insert() {
        $this->db->insert($this->table, [
            "name"  => $this->getName(),
            "email" => $this->getEmail()
        ]);
    }

    public function update() {
        $this->db->update($this->table, [
            "name"  => $this->getName(),
            "email" => $this->getEmail()],
            "id = {$this->id}");
    }

    public function delete() {
        $this->db->delete($this->table,
            "id = {$this->id}");
    }
}