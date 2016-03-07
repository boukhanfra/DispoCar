<?php

namespace parcAutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('parcAutoBundle:Default:index.html.twig');
    }
}
