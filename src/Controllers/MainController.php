<?php
// src/Controller/MainController.php
namespace App\Controllers;

use App\Entity\Destination;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Finder\Finder;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        // Keep the existing header images logic
        $baseDir = $this->getParameter('kernel.project_dir') . '/assets/images/header';
        $headerImages = [];

        $finder = new Finder();
        $finder->directories()->in($baseDir);

        foreach ($finder as $dir) {
            $location = $dir->getFilename();
            $headerImages[$location] = [];

            $images = new Finder();
            $images->files()->in($dir->getRealPath())->name('/\.(jpg|jpeg|png|gif)$/i');

            foreach ($images as $image) {
                $headerImages[$location][] = '/images/header/' . $location . '/' . $image->getFilename();
            }
        }

        // Load UAE destination images
        $uaeDir = $this->getParameter('kernel.project_dir') . '/assets/images/destinations/UAE';
        $destImages = [];

        if (is_dir($uaeDir)) {
            $uaeImages = new Finder();
            $uaeImages->files()->in($uaeDir)->name('/\.(jpg|jpeg|png|gif)$/i');

            foreach ($uaeImages as $image) {
                $destImages[] = '/images/destinations/UAE/' . $image->getFilename();
            }
        }

        // Create the UAE Destination object
        $destinationUAE = new Destination(
            destID: 1, // Unique identifier for the destination
            city: 'Dubai',
            country: 'UAE',
            subtitle: 'From desert adventures to thrilling waterparks, Dubai has it all',
            destImages: $destImages,
            reviewsCount: 15,
            avgScore: 4.7,
            description: "See the city from above at Skydive Dubai, or brave the edge walk with family and friends to enjoy spectacular views of the Burj Khalifa and the Dubai Fountain. You can also visit an indoor tropical forest with over 3,000 plants and animals at The Green Planet.

Dubai's skyline is dotted with architectural marvels and surprising feats of engineering. Start your holiday with a visit to the top of Burj Khalifa, the world's tallest tower, or fast forward in time at the Museum of the Future.

One of the best places to start your Dubai experience is at Dubai Museum in the historic area by the Dubai Creek. Discover Dubai's pearl diving roots and take a traditional boat ride between the textile, spice and gold souks.
 "
        );

        // Render the template with both header images and destination object
        return $this->render('main.html.twig', [
            'header' => $headerImages,
            'destination' => $destinationUAE, // Pass the destination object
        ]);
    }
}