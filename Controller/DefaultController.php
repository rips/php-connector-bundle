<?php

namespace RIPS\ConnectorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RIPSConnectorBundle:Default:index.html.twig');
    }
}
