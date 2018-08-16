<?php
namespace controller;

use model\Query;

abstract class Core{

    var $query;

    public function __construct(Query $query)
    {
        $this->query = $query;
    }

    public function header()
    {
        include"layout/header.php";
    }

    abstract public function content();


    public function body()
    {
        if($_POST){
            $this->isPost();
        }
        $this->header();
        $this->content();
    }
}