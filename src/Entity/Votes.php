<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VotesRepository")
 */
class Votes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Film;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageFilm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genre;

    /**
     * @ORM\Column(type="date")
     */
    private $VoteDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilm(): ?string
    {
        return $this->Film;
    }

    public function setFilm(string $Film): self
    {
        $this->Film = $Film;

        return $this;
    }

    public function getImageFilm(): ?string
    {
        return $this->ImageFilm;
    }

    public function setImageFilm(string $ImageFilm): self
    {
        $this->ImageFilm = $ImageFilm;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(string $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getVoteDate(): ?\DateTimeInterface
    {
        return $this->VoteDate;
    }

    public function setVoteDate(\DateTimeInterface $VoteDate): self
    {
        $this->VoteDate = $VoteDate;

        return $this;
    }
}
