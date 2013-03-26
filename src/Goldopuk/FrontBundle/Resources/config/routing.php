<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('goldopuk_front_homepage', new Route('/front', array(
    '_controller' => 'GoldopukFrontBundle:Default:index',
)));

return $collection;
