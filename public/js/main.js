document.addEventListener('DOMContentLoaded', function () {
    const educationSections = document.getElementById('educationSections');
    const addEducationButton = document.querySelector('.add-education-section');

    // Event listener for adding education section
    addEducationButton.addEventListener('click', function () {
        const newEducationSection = createEducationSectionTemplate();
        educationSections.appendChild(newEducationSection);
    });

    // Event listener for removing education section
    educationSections.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-education-section')) {
            event.target.closest('.education-section').remove();
        }
    });
});

function createEducationSectionTemplate() {
    const template = document.createElement('div');
    template.classList.add('education-section', 'row', 'mb-3', 'card', 'p-2');

    // Add education section fields
    const nameLabel = createLabel('Education', 'educationName');
    const nameInput = createInput('text', 'educationName[]');

    const facultyLabel = createLabel('Faculty', 'faculty');
    const facultyInput = createInput('text', 'educationFaculty[]');

    const studyProgramLabel = createLabel('Study Program', 'studyProgram');
    const studyProgramInput = createInput('text', 'studyProgram[]');

    const educationLevelLabel = createLabel('Education Level', 'educationLevel');
    const educationLevelInput = createInput('text', 'educationLevel[]');

    const timeSpendInStudiesLabel = createLabel('Time Spend In Studies', 'timeSpendInStudies');
    const timeSpendInStudiesInput = createInput('text', 'timeSpendInStudies[]');

    const statusLabel = createLabel('Status', 'status');
    const statusInput = createInput('text', 'status[]');

    const removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.classList.add('btn', 'btn-danger', 'remove-education-section', 'mt-2');
    removeButton.textContent = 'Remove';

    template.appendChild(nameLabel);
    template.appendChild(nameInput);
    template.appendChild(facultyLabel);
    template.appendChild(facultyInput);
    template.appendChild(studyProgramLabel);
    template.appendChild(studyProgramInput);
    template.appendChild(educationLevelLabel);
    template.appendChild(educationLevelInput);
    template.appendChild(timeSpendInStudiesLabel);
    template.appendChild(timeSpendInStudiesInput);
    template.appendChild(statusLabel);
    template.appendChild(statusInput);
    template.appendChild(removeButton);

    return template;
}

document.addEventListener('DOMContentLoaded', function () {
    const experienceSections = document.getElementById('experienceSections');
    const addExperienceButton = document.querySelector('.add-experience-section');

    // Event listener for adding experience section
    addExperienceButton.addEventListener('click', function () {
        const newExperienceSection = createExperienceSectionTemplate();
        experienceSections.appendChild(newExperienceSection);
    });

    // Event listener for removing experience section
    experienceSections.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-experience-section')) {
            event.target.closest('.experience-section').remove();
        }
    });
});

function createExperienceSectionTemplate() {
    const template = document.createElement('div');
    template.classList.add('experience-section', 'row', 'mb-3', 'card', 'p-2');

    // Add experience section fields
    const nameLabel = createLabel('Name', 'experienceName');
    const nameInput = createInput('text', 'experienceName[]');

    const professionLabel = createLabel('Profession', 'profession');
    const professionInput = createInput('text', 'profession[]');

    const workloadLabel = createLabel('Workload', 'workload');
    const workloadInput = createInput('text', 'workload[]');

    const experienceLabel = createLabel('Experience', 'experience');
    const experienceInput = createInput('text', 'experience[]');

    const removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.classList.add('btn', 'btn-danger', 'remove-experience-section', 'mt-2');
    removeButton.textContent = 'Remove';

    template.appendChild(nameLabel);
    template.appendChild(nameInput);
    template.appendChild(professionLabel);
    template.appendChild(professionInput);
    template.appendChild(workloadLabel);
    template.appendChild(workloadInput);
    template.appendChild(experienceLabel);
    template.appendChild(experienceInput);
    template.appendChild(removeButton);

    return template;
}

document.addEventListener('DOMContentLoaded', function () {
    const skillSections = document.getElementById('skillSections');
    const addSkillButton = document.querySelector('.add-skill-section');

    // Event listener for adding skill section
    addSkillButton.addEventListener('click', function () {
        const newSkillSection = createSkillSectionTemplate();
        skillSections.appendChild(newSkillSection);
    });

    // Event listener for removing skill section
    skillSections.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-skill-section')) {
            event.target.closest('.skill-section').remove();
        }
    });
});

function createSkillSectionTemplate() {
    const template = document.createElement('div');
    template.classList.add('skill-section', 'row', 'mb-3', 'card', 'p-2');

    // Add skill section fields
    const nameLabel = createLabel('Name', 'skillName');
    const nameInput = createInput('text', 'skillName[]');

    const descriptionLabel = createLabel('Description', 'description');
    const descriptionInput = createInput('text', 'description[]');

    const removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.classList.add('btn', 'btn-danger', 'remove-skill-section', 'mt-2');
    removeButton.textContent = 'Remove';

    template.appendChild(nameLabel);
    template.appendChild(nameInput);
    template.appendChild(descriptionLabel);
    template.appendChild(descriptionInput);
    template.appendChild(removeButton);

    return template;
}

document.addEventListener('DOMContentLoaded', function () {
    const customFieldSections = document.getElementById('customFieldSections');
    const addCustomFieldButton = document.querySelector('.add-custom-field-section');

    // Event listener for adding custom field section
    addCustomFieldButton.addEventListener('click', function () {
        const newCustomFieldSection = createCustomFieldSectionTemplate();
        customFieldSections.appendChild(newCustomFieldSection);
    });

    // Event listener for removing custom field section
    customFieldSections.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-custom-field-section')) {
            event.target.closest('.custom-field-section').remove();
        }
    });
});

function createCustomFieldSectionTemplate() {
    const template = document.createElement('div');
    template.classList.add('custom-field-section', 'row', 'mb-3', 'card', 'p-2');

    // Add custom field section fields
    const nameLabel = createLabel('Name', 'customFieldName');
    const nameInput = createInput('text', 'customFieldName[]');

    const descriptionLabel = createLabel('Description', 'customFieldDescription');
    const descriptionInput = createInput('text', 'customFieldDescription[]');

    const removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.classList.add('btn', 'btn-danger', 'remove-custom-field-section', 'mt-2');
    removeButton.textContent = 'Remove';

    template.appendChild(nameLabel);
    template.appendChild(nameInput);
    template.appendChild(descriptionLabel);
    template.appendChild(descriptionInput);
    template.appendChild(removeButton);

    return template;
}
function createLabel(text, id) {
    const label = document.createElement('label');
    label.htmlFor = id;
    label.classList.add('col-form-label');
    label.textContent = text;
    return label;
}

function createInput(type, name) {
    const input = document.createElement('input');
    input.type = type;
    input.classList.add('form-control');
    input.id = name;
    input.name = name;
    return input;
}