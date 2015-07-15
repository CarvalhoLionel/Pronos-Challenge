<?php

namespace Pronos\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function listeUtilisateursAction()
    {
        return $this->render('PronosAuthBundle:Default:listeUtilisateurs.html.twig');
    }
}
