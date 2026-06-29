<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'projects')]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $title;

    #[ORM\Column(length: 50)]
    private string $category;

    #[ORM\Column(length: 255)]
    private string $location;

    #[ORM\Column(length: 20)]
    private string $status;

    #[ORM\Column(length: 20)]
    private string $year;

    #[ORM\Column(type: 'text')]
    private string $description;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $image = null;

    public function getId(): int { return $this->id; }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): static { $this->title = $title; return $this; }

    public function getCategory(): string { return $this->category; }
    public function setCategory(string $category): static { $this->category = $category; return $this; }

    public function getLocation(): string { return $this->location; }
    public function setLocation(string $location): static { $this->location = $location; return $this; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getYear(): string { return $this->year; }
    public function setYear(string $year): static { $this->year = $year; return $this; }

    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): static { $this->description = $description; return $this; }

    public function getImage(): ?string { return $this->image; }
    public function setImage(?string $image): static { $this->image = $image; return $this; }

    public function toArray(): array
    {
        return [
            'id'          => $this->id,
            'title'       => $this->title,
            'category'    => $this->category,
            'location'    => $this->location,
            'status'      => $this->status,
            'year'        => $this->year,
            'description' => $this->description,
            'image'       => $this->image,
        ];
    }
}
