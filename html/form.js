

// Get all checkboxes for skills
const skillsCheckboxes = document.querySelectorAll('input[type="checkbox"][name="skills[]"]');
const preferredSkillsCheckboxes = document.querySelectorAll('input[type="checkbox"][name="skils[]"]');


skillsCheckboxes.forEach(skillCheckbox => {
    skillCheckbox.addEventListener('change', function() {
        // Disable corresponding checkbox 
        preferredSkillsCheckboxes.forEach(preferredCheckbox => {
            if (preferredCheckbox.value === skillCheckbox.value) {
                preferredCheckbox.disabled = skillCheckbox.checked;
            }
        });
    });
});

preferredSkillsCheckboxes.forEach(preferredSkillsCheckbox => {
    preferredSkillsCheckbox.addEventListener('change', function(){
        skillsCheckboxes.forEach(skillsCheckbox => {
            if(skillsCheckbox.value === preferredSkillsCheckbox.value){
                skillsCheckbox.disabled = preferredSkillsCheckbox.checked;
            }
        });
    });
});



