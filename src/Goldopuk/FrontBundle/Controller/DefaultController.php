<?php

namespace Goldopuk\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GoldopukFrontBundle:Default:index.html.php');
    }
}
