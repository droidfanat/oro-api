<?php

require "../vendor/autoload.php";
use \oroapi\models\entities;


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$userName = 'admin.';
$userApiKey = 'c39e0c2a520835ad0ce105f773200811d3bc1b..';
$url="http://oro.demo";


////////////
$attributes =new entities\Attributes(
        'name_'.rand(1000, 2000),
        'firstName_'.rand(1000, 2000),
        'lastName_'.rand(1000, 2000),
        new entities\EmailsEntities(rand(100,200).'Email@gmail.com'), 
        new entities\PhonesEntities(rand(199999999999, 999999999999))
        
        );
///////////////////
$relationships = new entities\Relationships();
$relationships->addOwner('1');
$relationships->addOrganization('1');



$Lead = new entities\LeadsEntities($attributes, $relationships);


$crm = new \oroapi\OroRequest($url, $userName ,$userApiKey);
$resp=$crm->post('/index.php/api/leads', $Lead); 
print_r($resp);