<?php
namespace App\Views\Containers;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class DestinationContainer
{
    public $destID;
    public $destTitle;
    public $subtitle;
    public $totalReviews;
    public $avgScore;
    public $city;
    public $description;

    public array $images;
}