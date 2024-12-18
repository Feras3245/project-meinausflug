<?php
// src/Model/DestinationUAE.php
namespace App\Entity;

class Destination
{
    private int $destID;
    private string $city;
    private string $country;
    private string $subtitle;
    private array $destImages;
    private int $reviewsCount;
    private float $avgScore;
    private string $description;

    public function __construct(
        int $destID,
        string $city,
        string $country,
        string $subtitle,
        array $destImages,
        int $reviewsCount,
        float $avgScore,
        string $description
    ) {
        $this->destID = $destID;
        $this->city = $city;
        $this->country = $country;
        $this->subtitle = $subtitle;
        $this->destImages = $destImages;
        $this->reviewsCount = $reviewsCount;
        $this->avgScore = $avgScore;
        $this->description = $description;
    }

    // Getters for each property
    public function getDestID(): int { return $this->destID; }
    public function getCity(): string { return $this->city; }
    public function getCountry(): string { return $this->country; }
    public function getSubtitle(): string { return $this->subtitle; }
    public function getDestImages(): array { return $this->destImages; }
    public function getReviewsCount(): int { return $this->reviewsCount; }
    public function getAvgScore(): float { return $this->avgScore; }
    public function getDescription(): string { return $this->description; }
}