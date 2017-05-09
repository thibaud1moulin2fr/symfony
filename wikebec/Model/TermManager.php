<?php
/**
 * Created by PhpStorm.
 * User: tmoulin2016
 * Date: 27/04/2017
 * Time: 14:26
 */

namespace Model;

class TermManager
{

    private $dbh;

    public function __construct()
    {
        $this->dbh = DB::connect();
    }

    public function findOneById($id)
    {
        $sql = "select * from terms where id = :id";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $term = $stmt->fetch();
        return $term;
    }

    public function findOneByRandom()
    {
        $sql = "select id from terms;";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $ids = $stmt->fetchAll();

        $rand = rand(0, count($ids) - 1);
        $sql = "select * from terms where id = :id;";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(":id", $ids[$rand]['id']);
        $stmt->execute();
        //return $stmt->fetch();
        return $stmt->fetchObject("\Model\Term");
    }

    public function getAllTerms()
    {
        $sql = "select * from terms;";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        //return $stmt->fetch();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "\Model\Term");
    }
}