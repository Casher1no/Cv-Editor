<?php

namespace App\Services\Cv\Save;

use App\Entity\Cv\CvAddress;
use App\Entity\Cv\CvCustomField;
use App\Entity\Cv\CvEducation;
use App\Entity\Cv\CvExperience;
use App\Entity\Cv\CvMainData;
use App\Entity\Cv\CvSkill;
use App\Repository\Cv\CvRepository;

class SaveCvService
{
    private CvRepository $repository;

    public function __construct(CvRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(SaveCvRequest $request)
    {
        $data = $request->data();
        $cv = $this->repository->get($request->id());

        $cv->setName($data['cvName']);

        $this->repository->delete($cv->mainData());

        $mainData = new CvMainData();
        $mainData->setName($data['name']);
        $mainData->setSurname($data['surname']);
        $mainData->setPhoneNumber($data['phoneNumber']);
        $mainData->setEmail($data['email']);

        $cv->addMainData($mainData);

        $this->repository->delete($cv->address());

        $address = new CvAddress();
        $address->setCountry($data['country']);
        $address->setAddressIndex($data['index']);
        $address->setCity($data['city']);
        $address->setStreet($data['street']);
        $address->setNumber($data['number']);

        $cv->addAddress($address);

        foreach ($cv->education() as $education) {
            $this->repository->delete($education);
        }

        if (isset($data['educationName'])) {
            for ($i = 0; $i < count($data['educationName']); $i++) {
                $education = new CvEducation();
                $education->setName($data['educationName'][$i]);
                $education->setFaculty($data['educationFaculty'][$i]);
                $education->setStudyProgram($data['studyProgram'][$i]);
                $education->setEducationLevel($data['educationLevel'][$i]);
                $education->setTimeSpendInStudies($data['timeSpendInStudies'][$i]);
                $education->setStatus($data['status'][$i]);

                $cv->addEducation($education);
            }
        }

        foreach ($cv->experience() as $experience) {
            $this->repository->delete($experience);
        }

        if (isset($data['experienceName'])) {
            for ($i = 0; $i < count($data['experienceName']); $i++) {
                $experience = new CvExperience();
                $experience->setName($data['experienceName'][$i]);
                $experience->setProfession($data['profession'][$i]);
                $experience->setWorkload($data['workload'][$i]);
                $experience->setExperience($data['experience'][$i]);

                $cv->addExperience($experience);
            }
        }

        foreach ($cv->skills() as $skill) {
            $this->repository->delete($skill);
        }

        if (isset($data['skillName'])) {
            for ($i = 0; $i < count($data['skillName']); $i++) {
                $skill = new CvSkill();
                $skill->setName($data['skillName'][$i]);
                $skill->setDescription($data['description'][$i]);

                $cv->addSkill($skill);
            }
        }

        foreach ($cv->customFields() as $customField) {
            $this->repository->delete($customField);
        }

        if (isset($data['customFieldName'])) {
            for ($i = 0; $i < count($data['customFieldName']); $i++) {
                $customField = new CvCustomField();
                $customField->setName($data['customFieldName'][$i]);
                $customField->setDescription($data['customFieldDescription'][$i]);

                $cv->addCustomField($customField);
            }
        }

        $this->repository->save();
    }
}