<?php

namespace Adim\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdimAppBundle:Default:index.html.twig');
    }
}
