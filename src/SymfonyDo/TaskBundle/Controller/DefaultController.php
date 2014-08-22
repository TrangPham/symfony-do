<?php

namespace SymfonyDo\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SymfonyDoTaskBundle:Default:index.html.twig', array('name' => $name));
    }
}
