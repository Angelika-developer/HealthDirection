<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\Informations;
use AppBundle\Entity\Measurements;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class GeneralController extends Controller
{

    /**
     * @Route("/", name="homepage");
     */
    public function homeAction()
    {
        $page = "homepage";
        return $this->render('index.html.twig', array(
            'page' => $page
        ));
    }

    /**
     * @Route("/speedDating", name="speedDating");
     */
    public function speedDatingAction()
    {
        $page = "build";
        return $this->render('speedDating.html.twig', array(
            'page' => $page
        ));
    }

    /**
     * @Route("/portalDescription", name="portalDescription");
     */
    public function portalDescriptionAction()
    {
        $page = "portal";
        return $this->render('portalDescription.html.twig', array(
            'page' => $page
        ));
    }

    /**
     * @Route("/about", name="about");
     */
    public function aboutAction(Request $request)
    {
        $page = "about";
        return $this->render('about.html.twig', array(
            'page' => $page
        ));
    }

}