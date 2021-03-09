<?php

namespace App\Entity;

use App\Repository\EApplicRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EApplicRepository::class)
 */
class EApplic
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
    private $FName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TName;

    /**
     * @ORM\Column(type="integer")
     */
    private $Phone;

    /**
     * @ORM\ManyToOne(targetEntity=ECourse::class, inversedBy="NameCourse")
     */
    private $CourseName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CourseStatus;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $update_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFName(): ?string
    {
        return $this->FName;
    }

    public function setFName(string $FName): self
    {
        $this->FName = $FName;

        return $this;
    }

    public function getSName(): ?string
    {
        return $this->SName;
    }

    public function setSName(string $SName): self
    {
        $this->SName = $SName;

        return $this;
    }

    public function getTName(): ?string
    {
        return $this->TName;
    }

    public function setTName(string $TName): self
    {
        $this->TName = $TName;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->Phone;
    }

    public function setPhone(int $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getCourseName(): ?ECourse
    {
        return $this->CourseName;
    }

    public function setCourseName(?ECourse $CourseName): self
    {
        $this->CourseName = $CourseName;

        return $this;
    }

    public function getCourseStatus(): ?string
    {
        return $this->CourseStatus;
    }

    public function setCourseStatus(string $CourseStatus): self
    {
        $this->CourseStatus = $CourseStatus;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->create_at;
    }

    public function setCreateAt(\DateTimeInterface $create_at): self
    {
        $this->create_at = $create_at;

        return $this;
    }
    public function setCreateAtVelue()
    {
        $this->create_at = new \DateTime();
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }
    public function setUpdateAtVelue()
    {
        $this->update_at = new \DateTime();
    }
}
