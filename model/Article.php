<?php

use controller\Core;

class Article extends Core
{
    public function content()
    {
        $articles = $this->query->selectAll('articles');
        include "views/articles.php";
    }

    public function isPost()
    {
        $data =$_POST;

        if ($this->rules($data))
        {
            $data=$this->injection($data);
            $data['date']=$this->today();
            $this->query->create('articles',$data);
            header('Location:/');
        }
    }

    public function rules($data)
    {
        $required = ['name','content'];
        foreach ($required as $key)
        {
          if (empty($data[$key]))
          {
               $massage ='ошибка (не заполнены обязательные поля)';
               $_COOKIE['message']=$massage;
               return false;
          }
        }
        return true;
    }
    public function injection($data)
    {
        $required = ['name','content'];
        foreach ($required as $key)
        {
            $data[$key]=strip_tags(trim($data[$key]));
        }

        return $data;
    }
    public function today()
    {
        return date('Y:m:d');
    }


}