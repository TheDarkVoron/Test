<?php

namespace App\Entity;

use App\Repository\ECourseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ECourseRepository::class)
 */
class ECourse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=EApplic::class, mappedBy="CourseName")
     */
    private $NameCourse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $StatusCourse;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCourse(): ?string
    {
        return $this->NameCourse;
    }

    public function setNameCourse(string $NameCourse): self
    {
        $this->NameCourse = $NameCourse;

        return $this;
    }

    public function getStatusCourse(): ?string
    {
        return $this->StatusCourse;
    }

    public function setStatusCourse(string $StatusCourse): self
    {
        $this->StatusCourse = $StatusCourse;

        return $this;
    }
}
