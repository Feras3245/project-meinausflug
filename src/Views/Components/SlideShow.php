<?php
namespace App\Views\Components;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class SlideShow
{
    public string $id;
    public array $images;
}