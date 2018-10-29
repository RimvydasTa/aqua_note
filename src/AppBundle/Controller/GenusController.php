<?php
/**
 * Created by PhpStorm.
 * User: rimvydas
 * Date: 18.10.17
 * Time: 09.27
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class GenusController extends Controller

{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)

    {
        $templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig', [
            'name' => $genusName
        ]);
        return new Response($html);
    }
}