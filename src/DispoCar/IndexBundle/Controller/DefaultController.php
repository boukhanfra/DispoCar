<?php

namespace DispoCar\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IndexBundle:index.html.twig');
    }

    public function searchAction(Request $request)
    {
        return $this->render('IndexBundle:search.html.twig');
    }
}
