<?php

namespace Ilikebunny\GdbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
 /**
     * @Route("/", name="_welcome")
     */
    public function indexAction()
    {
        return $this->render('IlikebunnyGdbBundle:Default:index.html.twig');
    }
}
