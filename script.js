document.addEventListener('DOMContentLoaded', () => {
    const countyCourts = {
        'Barrow': [
            'State Court',
            'Superior Court',
            'Auburn City Court',
            'Statham City Court',
            'Winder City Court'
        ],
        'Bartow': [
            'State Court',
            'Superior Court',
            'Adairsville City Court',
            'Cartersville City Court'
        ],
        'Carroll': [
            'State Court',
            'Superior Court',
            'Carrollton City Court',
            'Villa Rica City Court'
        ],
        'Cherokee': [
            'State Court',
            'Superior Court',
            'Canton City Court',
            'Woodstock City Court'
        ],
        'Clarke': [
            'State Court',
            'Superior Court',
            'Athens-Clarke County Court'
        ],
        'Cobb': [
            'State Court',
            'Superior Court',
            'Marietta City Court',
            'Smyrna City Court',
            'Kennesaw City Court',
            'Acworth City Court',
            'Powder Springs City Court',
            'Austell City Court'
        ],
        'Floyd': [
            'State Court',
            'Superior Court',
            'Rome City Court',
            'Cave Spring City Court'
        ],
        'Gordon': [
            'State Court',
            'Superior Court',
            'Calhoun City Court',
            'Fairmount City Court'
        ],
        'Gwinnett': [
            'State Court',
            'Superior Court',
            'Duluth City Court',
            'Lawrenceville City Court',
            'Lilburn City Court',
            'Norcross City Court',
            'Snellville City Court',
            'Suwanee City Court'
        ],
        'Haralson': [
            'State Court',
            'Superior Court',
            'Bremen City Court',
            'Tallapoosa City Court',
            'Buchanan City Court',
            'Waco City Court'
        ],
        'Paulding': [
            'State Court',
            'Superior Court',
            'Hiram City Court',
            'Dallas City Court'
        ],
        'Polk': [
            'State Court',
            'Superior Court',
            'Cedartown City Court',
            'Rockmart City Court',
            'Aragon City Court',
            'Braswell City Court'
        ],
        'Pickens': [
            'State Court',
            'Superior Court',
            'Jasper City Court',
            'Nelson City Court',
            'Talking Rock City Court'
        ]
    };

    const countySelect = document.getElementById('county');
    const courtSelect = document.getElementById('courtLocation');

    countySelect.addEventListener('change', () => {
        const selectedCounty = countySelect.value;
        
        // Clear previous options
        courtSelect.innerHTML = '<option value="">Select Court</option>';

        if (selectedCounty && countyCourts[selectedCounty]) {
            countyCourts[selectedCounty].forEach(court => {
                const option = document.createElement('option');
                option.value = court;
                option.textContent = court;
                courtSelect.appendChild(option);
            });
        }
    });
});

function addPhoneField() {
  const phoneFieldsContainer = document.getElementById("phoneFieldsContainer");

  // Create a new grouping container
  const fieldGroup = document.createElement("div");
  fieldGroup.className = "phone-field-group";

 

  // Create label + input for phone number
  const phoneInputLabel = document.createElement("label");
  phoneInputLabel.textContent = "PHONE #:";
  phoneInputLabel.className = "phone-input-label";


  const phoneInput = document.createElement("input");
  phoneInput.type = "text";
  phoneInput.name = "phoneNumber";
  phoneInput.placeholder = "123-456-7890";

   // Create label + select for device type
   const deviceTypeLabel = document.createElement("label");
   deviceTypeLabel.className = "device-type-label";
   deviceTypeLabel.textContent = " TYPE:";
 
   const deviceTypeSelect = document.createElement("select");
   deviceTypeSelect.name = "deviceType";
   // Add some basic options
   const deviceTypes = ["Mobile", "Home", "Other"];
   deviceTypes.forEach(function(type) {
     const option = document.createElement("option");
     option.value = type.toLowerCase();
     option.textContent = type;
     deviceTypeSelect.appendChild(option);
   });


 
  // Add spacing or line break as needed
  fieldGroup.appendChild(phoneInputLabel);
  fieldGroup.appendChild(phoneInput);

  // Append the new group to the container
  phoneFieldsContainer.appendChild(fieldGroup);

   // Add label + select to the group
   fieldGroup.appendChild(deviceTypeLabel);
   fieldGroup.appendChild(deviceTypeSelect);
}



function toggleArrestContainer() {
  const isChecked = document.getElementById("priorArrestToggle").checked;
  const arrestContainer = document.getElementById("priorArrestContainer");
  
  // If toggle is ON => YES => show container. Otherwise hide it.
  if (isChecked) {
    arrestContainer.classList.remove("hidden");
  } else {
    arrestContainer.classList.add("hidden");
  }
}


function toggleProbationContainer() {
  const isChecked = document.getElementById("probationToggle").checked;
  const probationContainer = document.getElementById("probationContainer");

  if (isChecked) {
    probationContainer.classList.remove("hidden");
  } else {
    probationContainer.classList.add("hidden");
  }
}

function updateCombinedEmail() {
  const username = document.getElementById("emailUser").value.trim();
  const domain = document.getElementById("emailDomain").value;
  const combinedEmail = username + "@" + domain;

  // Display result in an optional read-only field (if desired)
  const combinedOutput = document.getElementById("fullEmailOutput");
  if (combinedOutput) {
    combinedOutput.value = combinedEmail;
  }
}

function addMiddleNameField(containerId, labelText, inputName) {
  const container = document.getElementById(containerId);

  // Create a new paragraph to hold label+input
  const paragraph = document.createElement("p");

  // Create the label
  const label = document.createElement("label");
  label.textContent = labelText;


  const input = document.createElement("input");
  input.type = "text";
  input.name = inputName;


  paragraph.appendChild(label);
  paragraph.appendChild(document.createTextNode(" "));
  paragraph.appendChild(input);
  container.appendChild(paragraph);
}


function addDefendantMiddleName() {
  addMiddleNameField("defendantMiddleNameContainer", "MIDDLE:", "middleName");
}

function addCoSignerMiddleName() {
  addMiddleNameField("coSignerMiddleNameContainer", "MIDDLE:", "coSignerMiddleName");
}


function updateCombinedEmail() {
  const username = document.getElementById("emailUser").value.trim();
  const domain = document.getElementById("emailDomain").value;
  const combinedEmail = username + "@" + domain;

  // Display result in an optional read-only field (if desired)
  const combinedOutput = document.getElementById("fullEmailOutput");
  if (combinedOutput) {
    combinedOutput.value = combinedEmail;
  }
}


function toggleMaritalStatusContainer() {
  // Is the checkbox ON/checked?
  const isChecked = document.getElementById("maritalStatusToggle").checked;
  
  // Our spouse info container
  const spouseSection = document.getElementById("defendantSpouseSection");

  if (isChecked) {
    // If toggle is ON => show spouse fields
    spouseSection.classList.remove("hidden");
  } else {
    // If toggle is OFF => hide spouse fields
    spouseSection.classList.add("hidden");
  }
}

function handleMotherStatusChange() {
  const motherStatus = document.getElementById("motherStatus").value;
  const motherCity = document.getElementById("motherCity");
  const motherState = document.getElementById("motherState");
  const motherPhone = document.getElementById("motherPhone");

  if (motherStatus === "contact") {
    // "IN CONTACT" => clear the fields
    motherCity.value = "";
    motherState.value = "";
    motherPhone.value = "";
  } else {
    // "NO CONTACT", "INCARCERATED", or "DECEASED" => set to N/A
    motherCity.value = "N/A";
    motherState.value = "N/A";
    motherPhone.value = "N/A";
  }
}

function handleFatherStatusChange() {
  const fatherStatus = document.getElementById("fatherStatus").value;
  const fatherCity = document.getElementById("fatherCity");
  const fatherState = document.getElementById("fatherState");
  const fatherPhone = document.getElementById("fatherPhone");

  if (fatherStatus === "contact") {
    // "IN CONTACT" => clear the fields
    fatherCity.value = "";
    fatherState.value = "";
    fatherPhone.value = "";
  } else {
    // "NO CONTACT", "INCARCERATED", or "DECEASED" => set to N/A
    fatherCity.value = "N/A";
    fatherState.value = "N/A";
    fatherPhone.value = "N/A";
  }
}

document.addEventListener('DOMContentLoaded', function() {
    const dobInput   = document.getElementById('date-of-birth');
    const ageDisplay = document.getElementById('age-display');

    /**
     * 1) Handle backspace so the user can erase slashes
     *    if the caret is right after them.
     */
    dobInput.addEventListener('keydown', function(e) {
      // Check if user pressed Backspace
      if (e.key === 'Backspace') {
        const currentValue = dobInput.value;
        const startPos = dobInput.selectionStart;
        const endPos   = dobInput.selectionEnd;

        // Only handle the case where nothing is selected (start == end)
        // and the character behind the caret is a slash:
        if (startPos === endPos && startPos > 0 && currentValue[startPos - 1] === '/') {
          // Prevent the default backspace
          e.preventDefault();
          // Remove the slash
          dobInput.value = 
            currentValue.slice(0, startPos - 1) + currentValue.slice(startPos);
          // Move the caret back one position
          dobInput.selectionStart = startPos - 1;
          dobInput.selectionEnd   = startPos - 1;
        }
      }
    });

    /**
     * 2) Handle input to auto-insert slashes and calculate age.
     */
    dobInput.addEventListener('input', function() {
      // Remove everything that isn't a digit:
      let cleaned = dobInput.value.replace(/\D/g, '');

      // Insert slash after MM if length >= 2
      if (cleaned.length >= 2) {
        cleaned = cleaned.slice(0, 2) + '/' + cleaned.slice(2);
      }
      // Insert slash after DD if length >= 5
      if (cleaned.length >= 5) {
        cleaned = cleaned.slice(0, 5) + '/' + cleaned.slice(5);
      }

      // Update the field value
      dobInput.value = cleaned;

      // If we have exactly 10 characters, try to parse the date & calculate age
      if (cleaned.length === 10) {
        const month = parseInt(cleaned.slice(0, 2), 10);
        const day   = parseInt(cleaned.slice(3, 5), 10);
        const year  = parseInt(cleaned.slice(6), 10);

        const birthDate = new Date(year, month - 1, day);
        if (!isNaN(birthDate)) {
          const today = new Date();
          let age = today.getFullYear() - birthDate.getFullYear();
          const monthDiff = today.getMonth() - birthDate.getMonth();

          // If birth month/day is after today's month/day, subtract one year
          if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
          }
          ageDisplay.value = age;
        } else {
          ageDisplay.value = '';
        }
      } else {
        // Clear the age if date isn't fully formed
        ageDisplay.value = '';
      }
    });
    
    const heightInput = document.getElementById('height');
    heightInput.addEventListener('input', () => {
      // 1) Strip out non-digit characters
      const numericString = heightInput.value.replace(/[^0-9]/g, '');

      // 2) If no digits, clear the field
      if (numericString === '') {
        heightInput.value = '';
        return;
      }

      // 3) Parse feet and inches
      let feet;
      let inches;
      
      if (numericString.length === 1) {
        // If only one digit: "5" => 5'0"
        feet = parseInt(numericString, 10);
        inches = 0;
      } else {
        // Two or more digits: "56" => 5'6", "510" => 5'10"
        feet = parseInt(numericString.charAt(0), 10);
        inches = parseInt(numericString.substring(1), 10);
      }

      // 4) Format the displayed value
      heightInput.value = feet + "'" + inches + '"';
    });
    const weightInput = document.getElementById('weight');
    weightInput.addEventListener('blur', () => {
        const value = weightInput.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
        if (value) {
            weightInput.value = `${value} lbs`;
        }
    });
    const ssnInput = document.getElementById('ssnInput');

    /**
     * Formats a string of digits as a US Social Security Number (xxx-xx-xxxx).
     * @param {string} inputValue The unformatted input string.
     * @returns {string} The formatted SSN string.
     */
    function formatSsn(inputValue) {
      // Remove all non-digit characters
      const digits = inputValue.replace(/[^0-9]/g, '');
      
      // If fewer than 4 digits, just return what we have
      if (digits.length < 4) {
        return digits;
      }
      // If 4 or 5 digits, we have: xxx-xx
      if (digits.length < 6) {
        return digits.slice(0, 3) + '-' + digits.slice(3);
      }
      // If 6 or more digits, format: xxx-xx-xxxx
      return digits.slice(0, 3) + '-' + digits.slice(3, 5) + '-' + digits.slice(5, 9);
    }

    
    // Listen for input on the SSN field
    ssnInput.addEventListener('input', function() {
      this.value = formatSsn(this.value);
    });


  });


