<?php
namespace App\Views\Containers;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class DestinationContainer
{
    public $uuid;
    public $destTitle;
    public $subtitle;
    public $totalReviews;
    public $avgScore;
    public $city;
    public $description;

    public array $images;
}