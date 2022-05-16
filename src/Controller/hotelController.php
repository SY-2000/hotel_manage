<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
Use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class hotelController extends Controller {

    /**
     * @Route(path="/hotels", methods={"GET"})
     */

    #[Route('/accuiel')]
    public function accueil(): Response
    {
        return new Response('hi');
        return $this->render('hotels/index.html.twig');

    }



}