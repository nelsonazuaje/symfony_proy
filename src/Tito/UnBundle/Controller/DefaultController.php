<?php

namespace Tito\UnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TitoUnBundle:Default:index.html.twig');
    }
}
