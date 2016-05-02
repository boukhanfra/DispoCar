<?php

namespace DispoCar\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    public function indexAction()
    {

        return $this->render('IndexBundle:Index:index.html.twig');
    }

    public function searchAction(Request $request)
    {
        return $this->render('IndexBundle:Index:search.html.twig');
    }
}
