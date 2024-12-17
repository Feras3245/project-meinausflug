<?php
namespace App\Views\Components;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class ReviewScore
{
    public float $score = 0;
}