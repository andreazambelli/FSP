<?php

namespace IRAM\FSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FSPBundle:Default:index.html.twig');
    }
}
