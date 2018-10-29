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
        $notes = [
            'Octapus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

        return $this->render('genus/show.html.twig',[
            'name' => $genusName,
            'notes' => $notes
        ]);
    }
}