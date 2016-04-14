<?php

namespace DispoCar\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('IndexBundle:Default:index.html.twig');
    }
}
