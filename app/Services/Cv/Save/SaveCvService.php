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

        $mainData = new CvMainData();
        $mainData->setName($data['name']);
        $mainData->setSurname($data['surname']);
        $mainData->setPhoneNumber($data['phoneNumber']);
        $mainData->setEmail($data['email']);

        $cv->addMainData($mainData);

        $address = new CvAddress();
        $address->setCountry($data['country']);
        $address->setIndex($data['index']);
        $address->setCity($data['city']);
        $address->setStreet($data['street']);
        $address->setNumber($data['number']);

        $cv->addAddress($address);

        $cv->education()->clear();
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

        $cv->education()->clear();
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

        $cv->skills()->clear();
        if (isset($data['skillName'])) {
            for ($i = 0; $i < count($data['skillName']); $i++) {
                $skill = new CvSkill();
                $skill->setName($data['skillName'][$i]);
                $skill->setDescription($data['description'][$i]);

                $cv->addSkill($skill);
            }
        }

        $cv->customFields()->clear();
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