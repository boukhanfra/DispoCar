<?php

namespace DispoCar\ParcAutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ParcAutoBundle:Default:index.html.twig');
    }
}
