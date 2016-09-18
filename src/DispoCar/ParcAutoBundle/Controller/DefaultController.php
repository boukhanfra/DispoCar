<?php

namespace DispoCar\ParcAutoBundle\Controller;

use DispoCar\ParcAutoBundle\Entity\Vehicule;
use DispoCar\ParcAutoBundle\Form\Type\AddVehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ParcAutoBundle:Default:index.html.twig');
    }


    public function ajoutVehiculeAction(Request $request)
    {
        $vehicule=new Vehicule();
        $form = $this->createForm(AddVehiculeType::class,$vehicule);
        $form->handleRequest($request);

        if($form->isValid())
        {
echo "hiiii";
        }

        return $this->render('ParcAutoBundle:gestion:ajoutVehicule.html.twig', array('form'=>$form->createView()
        ));


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
