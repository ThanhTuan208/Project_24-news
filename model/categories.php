<?php
class categories extends Db
{
    public function getAllCate()
    {
        $sql = self::$connection->prepare("SELECT * FROM categories");
        $sql->execute();
        $categories = array();
        $categories = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $categories;
    }

    public function getNameCate()
    {
        $sql = self::$connection->prepare("SELECT * FROM categories");
        $sql->execute();
        $result = array();
        $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    public function getCateByID($cate)
    {
        $sql = self::$connection->prepare('SELECT * FROM categories WHERE categories.id = ?');
        $sql->bind_param('i', $cate);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
}
