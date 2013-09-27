<?php

namespace LVC\Bundle\ExecutorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LVCExecutorBundle:Default:index.html.twig', array('name' => $name));
    }
}
