<?php

namespace booking\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('bookingIndexBundle:Default:index.html.twig');
    }
}
