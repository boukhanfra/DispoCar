<?php

namespace DispoCar\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgenceController extends Controller
{
    public function agenceAction()
    {
        return $this->render('AgenceBundle:Default:agence.html.twig');
    }


}
