<?php
/////////////////////////
///////ZOTEC FRAMEWORK
//////admin@zotecsoft.com
////////////////////////
require_once("./config/main.php");

//PUBLIC ROUTES
get('/', 'views/examples/query.php');

//404 PAGE
any('/404','views/404.php');
