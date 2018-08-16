<?php

namespace Model\Repository;

use Model\Domain\Movie;
use Model\Domain\User;

class UserRepository extends Repository
{
    public function selectAll(): array
    {
        $users = array();
        $sql    = "SELECT `username`, `email`, `password` FROM `user`";
        foreach ($this->conn->getPDOConnection()->query($sql) as $key => $row) {
            $user    = new Movie($row['username'], $row['email'], $row['password']);
            $users[] = $user;
        }
        return $users;

    }

    public function selectOne(string $username): array
    {
        $users = array();
        $sql    = "SELECT `pk`,`username`, `email`, `password` FROM `user` WHERE pk = $username";
        foreach ($this->conn->getPDOConnection()->query($sql) as $key => $row) {
            $user    = new User($row['name'], $row['year'], $row['picture'], $row['pk']);
            $users[] = $user;
        }
        return $users;

    }
}