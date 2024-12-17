<?php

namespace App\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

use Symfony\Component\Finder\Finder;

class MainController extends AbstractController {

    // #[Route('/')]
    // public function index(TranslatorInterface $translator): Response {
    //     // return $this->render('main.html.twig');
    //     ob_start();
    //     phpinfo();
    //     $phpinfo = ob_get_clean();

    //     return $this->render('main.html.twig', array('phpinfo' => $phpinfo));
    // }

    #[Route('/', name: 'index')]
    public function test(): Response
    {
        $baseDir = $this->getParameter('kernel.project_dir') . '/assets/images/header';
        $headerImages = [];

        // Use Symfony Finder to read directory structure
        $finder = new Finder();
        $finder->directories()->in($baseDir);

        foreach ($finder as $dir) {
            $location = $dir->getFilename(); // Get subfolder name
            $headerImages[$location] = [];

            // Find image files in the subfolder
            $images = new Finder();
            $images->files()->in($dir->getRealPath())->name('/\.(jpg|jpeg|png|gif)$/i');

            foreach ($images as $image) {
                $headerImages[$location][] = '/images/header/' . $location . '/' . $image->getFilename();
            }
        }

        return $this->render('main.html.twig', [
            'header' => $headerImages,
        ]);
    }
}
