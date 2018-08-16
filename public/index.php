<?php

use model\Query;

include ('../setting/PDO.php');
include ('../controller/Core.php');
include ('../model/Article.php');
include ('../model/Query.php');

 $query = new Query($PDO);

 $model = new Article($query);
 $model->body();
