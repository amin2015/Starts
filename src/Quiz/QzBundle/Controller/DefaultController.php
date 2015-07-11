<?php

namespace Quiz\QzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('QuizQzBundle:Default:index.html.twig', array('name' => $name));
    }
}
