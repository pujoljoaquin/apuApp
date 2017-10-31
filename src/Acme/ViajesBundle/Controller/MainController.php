<?php

namespace Acme\ViajesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends Controller
{

    /**
     * Redirecciona a la pagina principal del sistema.
     *
     */
    public function inicioAction()
    {
        return $this->render('AcmeViajesBundle:Main:index.html.twig');
    }


    /**
     * Redirecciona a la pagina de acceso denegado
     *
     */
    public function accesoProhibidoAction()
    {
        return $this->render('AcmeViajesBundle:Main:accesoProhibido.html.twig');
    }
}
