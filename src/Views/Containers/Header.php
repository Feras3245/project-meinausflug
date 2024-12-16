<?php
namespace App\Views\Containers;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class Header
{
    public array $headerImages;
}