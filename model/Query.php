<?php
namespace model;
use PDO;

class Query{
    var $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo =$pdo;
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM $table";
        $container = $this->pdo->prepare($sql);
        $container->execute();
        return $container->fetchAll(2);

    }
    public function create($table,$data)
    {
        $keys = array_keys($data);
        $line = implode(',',$keys);
        $values = ':'.implode(',:',$keys);
        $sql = "INSERT INTO $table ($line) VALUES ($values)";
        $container=$this->pdo->prepare($sql);
        $container->execute($data);
    }

}