<?php

namespace Pronos\PronosticsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PronosPronosticsBundle:Default:index.html.twig');
    }

    public function listeOrganisationsAction()
    {
        $organizations = $this->getDoctrine()->getRepository('PronosPronosticsBundle:Organization')->findAll();
        return $this->render('PronosPronosticsBundle:Default:listOrganizations.html.twig',
            array('organisations' => $organizations));
    }

    public function listeChampionnatsAction()
    {
        return $this->render('PronosPronosticsBundle:Default:listeChampionnats.html.twig');
    }

    public function listeEquipesAction()
    {
        return $this->render('PronosPronosticsBundle:Default:listeEquipes.html.twig');
    }

    public function mesPronosAction()
    {
        return $this->render('PronosPronosticsBundle:Default:mesPronos.html.twig');
    }
}
