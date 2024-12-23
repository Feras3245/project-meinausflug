<?php
namespace App\Views\Containers;

use App\Entity\Destination;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class DestinationHeader
{
    public array $images;
    public string $city;
    public int $destID;
}