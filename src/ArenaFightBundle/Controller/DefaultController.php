<?php

namespace ArenaFightBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArenaFightBundle:Default:index.html.twig');
    }
}
