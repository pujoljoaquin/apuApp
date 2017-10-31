<?php

namespace Acme\ViajesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeViajesBundle:Default:index.html.twig');
    }
}
