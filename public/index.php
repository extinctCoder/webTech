<?php
/**
 * Created by PhpStorm.
 * User: Sabbir Ahmed Shourov
 * Date: 3/23/2018
 * Time: 2:38 PM
 */
?>
<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App();
require_once('../app/api/test.php');
$app->run();
?>
