<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $PublishedAT;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublishedAT(): ?\DateTimeInterface
    {
        return $this->PublishedAT;
    }

    public function setPublishedAT(\DateTimeInterface $PublishedAT): self
    {
        $this->PublishedAT = $PublishedAT;

        return $this;
    }
}
