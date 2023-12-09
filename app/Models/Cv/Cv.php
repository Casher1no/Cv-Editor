<?php

namespace App\Models\Cv;

class Cv
{
    // TODO : Add cv database
    // TODO : Map attributes for entities
    // TODO : Remove construct and replace by getter/setter
    // TODO : https://www.youtube.com/watch?v=P2PYrZGqhLU&ab_channel=ProgramWithGio
    private CvMainData $mainData;
    private CvAddress $address;
    private array $education;
    private array $experience;
    private array $skills;
    private array $customFields;

    public function __construct(CvMainData $mainData, CvAddress $address)
    {
        $this->mainData = $mainData;
        $this->address = $address;
    }

    public function mainData(): CvMainData
    {
        return $this->mainData;
    }

    public function address(): CvAddress
    {
        return $this->address;
    }

    public function education(): array
    {
        return $this->education;
    }

    public function addEducation(CvEducation $education){
        $this->education[] = $education;
    }

    public function experience(): array
    {
        return $this->experience;
    }

    public function addExperience(CvExperience $experience){
        $this->experience[] = $experience;
    }

    public function skills(): array
    {
        return $this->skills;
    }

    public function addSkill(CvSkill $skill){
        $this->skills[] = $skill;
    }

    public function customFields(): array
    {
        return $this->customFields;
    }

    public function addCustomField(CvCustomField $customField){
        $this->customFields[] = $customField;
    }
}