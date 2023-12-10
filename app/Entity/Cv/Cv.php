<?php

namespace App\Entity\Cv;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('cv')]
class Cv
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column]
    private string $name;
    #[OneToOne(mappedBy: 'cv', targetEntity: CvMainData::class, cascade: ['persist', 'remove'])]
    private CvMainData $mainData;
    #[OneToOne(mappedBy: 'cv', targetEntity: CvAddress::class, cascade: ['persist', 'remove'])]
    private CvAddress $address;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvEducation::class, cascade: ['persist', 'remove'])]
    private Collection $education;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvExperience::class, cascade: ['persist', 'remove'])]
    private Collection $experience;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvSkill::class, cascade: ['persist', 'remove'])]
    private Collection $skills;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvCustomField::class, cascade: ['persist', 'remove'])]
    private Collection $customFields;
    #[Column(name: 'created_at',)]
    private \DateTime $createdAt;

    public function __construct()
    {
        $this->name = 'New CV';
        $this->education = new ArrayCollection();
        $this->experience = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->customFields = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function mainData(): CvMainData
    {
        return $this->mainData ?? new CvMainData();
    }

    public function address(): CvAddress
    {
        return $this->address ?? new CvAddress();
    }

    public function education(): Collection
    {
        return $this->education;
    }

    public function experience(): Collection
    {
        return $this->experience;
    }

    public function skills(): Collection
    {
        return $this->skills;
    }

    public function customFields(): Collection
    {
        return $this->customFields;
    }

    public function createdAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function addMainData(CvMainData $mainData): Cv
    {
        $mainData->setCv($this);

        $this->mainData = $mainData;

        return $this;
    }

    public function addAddress(CvAddress $address): Cv
    {
        $address->setCv($this);

        $this->address = $address;

        return $this;
    }

    public function addEducation(CvEducation $education): Cv
    {
        $education->setCv($this);

        $this->education->add($education);

        return $this;
    }

    public function addExperience(CvExperience $experience): Cv
    {
        $experience->setCv($this);

        $this->experience->add($experience);

        return $this;
    }

    public function addSkill(CvSkill $skill): Cv
    {
        $skill->setCv($this);

        $this->skills->add($skill);

        return $this;
    }

    public function addCustomField(CvCustomField $customField): Cv
    {
        $customField->setCv($this);

        $this->customFields->add($customField);

        return $this;
    }

}