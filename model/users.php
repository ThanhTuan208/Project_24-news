<?php
class User extends Db
{
    public function getAllUser()
    {
        $sql = self::$connection->prepare('SELECT * FROM users');
        $sql->execute();
        $user = array();
        $user = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $user;
    }

    public function getUserByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM users WHERE id LIKE ?");
        $sql->bind_param('i', $id);
        $sql->execute();
        $user = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $user;
    }

}