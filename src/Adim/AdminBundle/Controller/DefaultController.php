<?php

namespace Adim\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdimAdminBundle:Default:index.html.twig');
    }
}
