<?php


namespace App\Model;



use Common\Database\DbConnector;

class Galerry extends AbstractModel
{

    private $dbconnectorGarry;

    public function __construct()
    {
        $connect = new DbConnector();
        $this->dbconnectorGarry = $connect->connect();

    }

    public function getAllTitle(): array
    {
        $sql = 'SELECT * FROM Galerry';
        $result = $this->dbconnectorGarry->query($sql);
        return $result->fetchAll();



    }
}