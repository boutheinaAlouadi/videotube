<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideoRepository::class)
 */
class Video
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $likeCounter;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publishedAT;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?text
    {
        return $this->description;
    }

    public function setDescription(text $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLikeCounter(): ?int
    {
        return $this->likeCounter;
    }

    public function setLikeCounter(int $likeCounter): self
    {
        $this->likeCounter = $likeCounter;

        return $this;
    }

    public function getPublishedAT(): ?\DateTimeInterface
    {
        return $this->publishedAT;
    }

    public function setPublishedAT(\DateTimeInterface $publishedAT): self
    {
        $this->publishedAT = $publishedAT;

        return $this;
    }
}
