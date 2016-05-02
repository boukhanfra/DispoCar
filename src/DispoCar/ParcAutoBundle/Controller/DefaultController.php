<?php

namespace DispoCar\ParcAutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ParcAutoBundle:Default:index.html.twig');
    }
    public function ajoutVehiculeAction()
    {
        return $this->render('ParcAutoBundle:gestion:ajoutVehicule.html.twig');
    }
    public function ajoutPrixAction()
    {
        return $this->render('ParcAutoBundle:gestion:ajoutPrix.html.twig');
    }
    public function ajoutDispoAction()
    {
        return $this->render('ParcAutoBundle:gestion:ajoutDispo.html.twig');
    }
}
