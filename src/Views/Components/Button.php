<?php
namespace App\Views\Components;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class Button
{
    public $type = 'primary';
}