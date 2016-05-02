<?php

namespace DispoCar\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function gesReservationAction()
    {
        return $this->render('ReservationBundle:gestion:gesReservation.html.twig');
    }
}
