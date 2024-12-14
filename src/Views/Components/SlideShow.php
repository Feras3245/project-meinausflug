<?php
namespace App\Views\Components;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class SlideShow
{
    public string $uuid;
    public array $images;
}