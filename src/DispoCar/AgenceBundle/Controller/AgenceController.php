<?php

namespace DispoCar\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgenceController extends Controller
{
    public function agenceAction()
    {
        return $this->render('AgenceBundle::agence.html.twig');
    }

    public function ajoutVehiculeAction()
    {
        return $this->render('AgenceBundle:gestion:ajoutVehicule.html.twig');
    }
}
