<?php

namespace App\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class MainController extends AbstractController {

    #[Route('/')]
    public function index(TranslatorInterface $translator): Response {
        // return $this->render('main.html.twig');
        ob_start();
        phpinfo();
        $phpinfo = ob_get_clean();

        return $this->render('main.html.twig', array('phpinfo' => $phpinfo));
    }
}