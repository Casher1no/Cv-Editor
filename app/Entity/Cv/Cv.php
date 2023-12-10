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
    #[OneToOne(mappedBy: 'cv', targetEntity: CvMainData::class)]

    private CvMainData $mainData;
    #[OneToOne(mappedBy: 'cv', targetEntity: CvAddress::class)]

    private CvAddress $address;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvEducation::class)]
    private Collection $education;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvExperience::class)]

    private Collection $experience;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvSkill::class)]

    private Collection $skills;
    #[OneToMany(mappedBy: 'cv', targetEntity: CvCustomField::class)]

    private Collection $customFields;
    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    public function __construct()
    {
        $this->education = new ArrayCollection();
        $this->experience = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->customFields = new ArrayCollection();
    }


}