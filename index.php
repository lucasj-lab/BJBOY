<html lang="en"><head>
  <meta charset="UTF-8">
  <title>Contract Information Form</title>
  <link rel="stylesheet" href="styles.css">
 
  <script>
    /**
     * Formats a string of digits as a US phone number: XXX-XXX-XXXX
     * Restricts input to digits and places dashes appropriately.
     */
    function formatPhoneNumber(rawValue) {
      let digits = rawValue.replace(/\D/g, "");

      // Limit to 10 digits
      if (digits.length > 10) {
        digits = digits.slice(0, 10);
      }

      if (digits.length <= 3) {
        // Up to 3 digits: "123"
        return digits;
      } else if (digits.length <= 6) {
        // 4–6 digits: "123-456"
        return digits.slice(0, 3) + "-" + digits.slice(3);
      } else {
        // 7–10 digits: "123-456-7890"
        return digits.slice(0, 3) + "-" + digits.slice(3, 6) + "-" + digits.slice(6);
      }
    }

    /**
     * Event handler for ALL phone fields.
     *  - Reads the raw input
     *  - Applies the formatting
     *  - Updates the field’s value
     */
    function handlePhoneFieldInput(event) {
      const inputField = event.target;
      inputField.value = formatPhoneNumber(inputField.value);
    }

    // Attach event listeners after the DOM is loaded
    document.addEventListener("DOMContentLoaded", function() {
      // Select all inputs that should have phone-formatting
      const phoneFields = document.querySelectorAll('.phoneField');

      phoneFields.forEach(function(field) {
        // Listen for user input on each field
        field.addEventListener("input", handlePhoneFieldInput);
      });
    });
  </script>
</head>
<body>
  <h1>Agreement for Bail Bond</h1>
  <form>
    <P>
  <h2>General Info</h2>
  </p>
   
    <p>
      <label for="Name">NAME:</label>
    </p>
    <p>
      <label for="alias">ALIAS:</label>
      <input type="text" id="alias" name="alias">
    </p>
    <p>
    <label for="DOB">DOB: 
    <br></label>
  <input 
      type="text" 
      id="date-of-birth" 
      name="date-of-birth" 
      placeholder="MM/DD/YYYY" 
      maxlength="10" 
      required
      style="width: 150px;"
  >

  <!-- Read-only Age display to the right -->
  <label for="age-display" style="margin-left: 1rem;"> <br><br> AGE:<br></label>
  <input 
      type="text" 
      id="age-display" 
      name="age-display" 
      readonly
      style="width: 50px;"
  >
</div>
    </p>
    <p>
      <label for="dmv">DMV #:</label>
      <input type="text" id="dmv" name="dmv">
    </p>
    <p>
    <label for="ssnInput">SSN:</label>
    <input type="text" id="ssnInput" name="ssnInput" placeholder="123-45-6789">
  </p>
    <p>
      <label for="sex">SEX:</label>
      <select id="sex" name="sex" required>
          <option value="">Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
    </p>

    <p>
            <label for="race">RACE:</label>
            <select id="race" name="race" required>
                <option value="">Select</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Asian">Asian</option>
                <option value="Hispanic">Hispanic</option>
                <option value="Native American">Native American</option>
                <option value="Other">Other</option>
            </select>
        </p>

        <p>
    <label for="height">HGT:</label>
    <input type="text" id="height" name="height">
  </p>

    <p>
      <label for="weight">WGT:</label>
      <input type="text" id="weight" name="weight">
    </p>


        <!-- Hair Color Dropdown -->
        <p>
            <label for="hair">HAIR:</label>
            <select id="hair" name="hair" required>
                <option value="">Select</option>
                <option value="Black">Black</option>
                <option value="Brown">Brown</option>
                <option value="Blonde">Blonde</option>
                <option value="Red">Red</option>
                <option value="Gray">Gray</option>
                <option value="Bald">Bald</option>
                <option value="Other">Other</option>
            </select>
        </p>

        <!-- Eye Color Dropdown -->
        <p>
            <label for="eyes">EYES:</label>
            <select id="eyes" name="eyes" required>
                <option value="">Select</option>
                <option value="Brown">Brown</option>
                <option value="Blue">Blue</option>
                <option value="Green">Green</option>
                <option value="Hazel">Hazel</option>
                <option value="Gray">Gray</option>
                <option value="Other">Other</option>
            </select>
        </p>

        <!-- ID Mark Input -->

    <p>
      <label for="idMark">ID MARK:</label>
      <input type="text" id="idMark" name="idMark">
    </p>

    <p>
      <label for="todayDate">TODAY’S DATE:</label>
      <?php 
    echo date("m/d/y"); ?>
  </p>
  
  
     
    <p>
  <h2>Bond Info</h2>
  </p>
  <p>
      <label for="bondAmount">BOND AMOUNT $:</label>
      <input type="text" id="bondAmount" name="bondAmount">
    </p>
    <p>
      <label for="charges">CHARGES:</label>
      <input type="text" id="charges" name="charges">
    </p>

    <label for="county">COUNTY:</label>
        <select id="county" name="county" required>
            <option value="">Select County</option>
            <option value="Barrow">Barrow</option>
            <option value="Bartow">Bartow</option>
            <option value="Carroll">Carroll</option>
            <option value="Cherokee">Cherokee</option>
            <option value="Clarke">Clarke</option>
            <option value="Cobb">Cobb</option>
            <option value="Floyd">Floyd</option>
            <option value="Gordon">Gordon</option>
            <option value="Gwinnett">Gwinnett</option>
            <option value="Haralson">Haralson</option>
            <option value="Paulding">Paulding</option>
            <option value="Polk">Polk</option>
            <option value="Pickens">Pickens</option>
        </select>
        
        <!-- Court Dropdown -->
        <label for="courtLocation">COURT:</label>
        <select id="courtLocation" name="courtLocation" required>
            <option value="">Select Court</option>
        </select>
    <p>
      <label for="courtDate">COURT DATE: </label>
      <input type="text" id="courtDate" name="courtDate">
    </p>
    <p>
      <label for="holds">HOLDS?:</label>
      <input type="text" id="holds" name="holds">
    </p>

    <p>
      <label for="warrantNumber">WARRANT #: </label>
      <input type="text" id="warrantNumber" name="warrantNumber">
    </p>

    <p>
      <label for="caseNumber">CASE #: </label>
      <input type="text" id="caseNumber" name="caseNumber">
    </p>
    <p>
  <h2>Contact</h2>
  </p>
  <p>
      <label for="firstName">FIRST:</label>
      <input type="text" id="firstName" name="firstName">
    </p>
    <div id="defendantMiddleNameContainer">
    <p>
      <label for="middleName">MIDDLE:</label>
      <input type="text" id="middleName" name="middleName">


  <!-- Button to add another Defendant Middle Name -->

    <button type="button" onclick="addDefendantMiddleName()"> + </button>
  </p>
  </div>
    <p>
      <label for="lastName">LAST:</label>
      <input type="text" id="lastName" name="lastName">
    </p>
    <div class="email-container">
    <label for="emailUser">Email:</label>
    <input 
      type="text" 
      id="emailUser" 
      name="emailUser" 
      placeholder="username"
      oninput="updateCombinedEmail()"
    >

    <label for="emailDomain">@</label>
    <select 
      id="emailDomain" 
      name="emailDomain"
      onchange="updateCombinedEmail()"
    >
      <option value="gmail.com">gmail.com</option>
      <option value="yahoo.com">yahoo.com</option>
      <option value="outlook.com">outlook.com</option>
      <option value="hotmail.com">hotmail.com</option>
      <option value="icloud.com">icloud.com</option>
      <!-- Add more domains as needed -->
    </select>
  </div>

  <!-- OPTIONAL: Display the full combined email in a read-only field -->
  <p>
    <label for="fullEmailOutput">Full Email:</label>
    <input 
      type="text" 
      id="fullEmailOutput" 
      name="fullEmailOutput"
      readonly
    >
  </p>
<p>
<div id="phoneFieldsContainer">
    <div class="phone-field-group">
      <!-- 'phoneNumberDefault' input with name="phoneNumberDefault" -->
      <label class="phone-input-label" for="phoneNumberDefault">PHONENUMBERDEFAULT:</label>
      <input 
        type="text" 
        id="phoneNumberDefault" 
        name="phoneNumberDefault" 
        class="phoneField"
        placeholder="(555) 555-5555 or +44..."
      >

      <!-- 'deviceTypeDefault' select with name="deviceTypeDefault" -->
      <label class="device-type-label" for="deviceTypeDefault">DEVICETYPEDEFAULT:</label>
      <select id="deviceTypeDefault" name="deviceTypeDefault">
        <option value="mobile">Mobile</option>
        <option value="home">Home</option>
        <option value="other">Other</option>
      </select>
    </div>
  </div>

  <!-- Button to add more phone fields dynamically (if you have a JS function addPhoneField()) -->
  <button type="button" class="add-button" onclick="addPhoneField()">+</button>

  <hr>

  <!-- Separate phone input that uses a format dropdown (US / US Long Distance) -->
  <div class="phone-field-group">
    <label class="phone-input-label" for="phoneNumber">PHONENUMBER:</label>
    <input 
      type="text" 
      id="phoneNumber" 
      name="phoneNumber" 
      class="phoneField"
      placeholder="123-456-7890"
    >

    <label class="device-type-label" for="phoneFormatSelect">PHONEFORMAT:</label>
    <select id="phoneFormatSelect" name="phoneFormatSelect">
      <option value="us" selected>US</option>
      <option value="usLongDistance">US Long Distance</option>
    </select>
  </div>

  <!-- Additional phone fields, each marked with class="phoneField" for auto-formatting. -->
  
  <div class="phone-field-group">
    <label for="cosEmployerPhone">COSEMPLOYERPHONE:</label>
    <input 
      type="text" 
      id="cosEmployerPhone" 
      name="cosEmployerPhone" 
      class="phoneField"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="coSpouseCell">COSPOUSECELL:</label>
    <input 
      type="text" 
      id="coSpouseCell" 
      name="coSpouseCell" 
      class="phoneField"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="cosPhone">COSPHONE:</label>
    <input 
      type="text" 
      id="cosPhone" 
      name="cosPhone" 
      class="phoneField"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="attorneyPhone">ATTORNEYPHONE:</label>
    <input 
      type="text" 
      id="attorneyPhone" 
      name="attorneyPhone" 
      class="phoneField"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="reference3Phone">REFERENCE3PHONE:</label>
    <input 
      type="text" 
      id="reference3Phone" 
      name="reference3Phone" 
      class="phoneField"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="reference2Phone">REFERENCE2PHONE:</label>
    <input 
      type="text" 
      id="reference2Phone" 
      name="reference2Phone" 
      class="phoneField"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="reference1Phone">REFERENCE1PHONE:</label>
    <input 
      type="text" 
      id="reference1Phone" 
      name="reference1Phone" 
      class="phoneField"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="fatherPhoneInput">FATHERPHONEINPUT:</label>
    <input 
      type="text" 
      id="fatherPhoneInput" 
      name="fatherPhoneInput" 
      class="phoneField"
      placeholder="123-456-7890"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="motherPhoneInput">MOTHERPHONEINPUT:</label>
    <input 
      type="text" 
      id="motherPhoneInput" 
      name="motherPhoneInput" 
      class="phoneField"
      placeholder="123-456-7890"
    >
  </div>
  
  <div class="phone-field-group">
    <label for="spouseHomePhone">SPOUSEHOMEPHONE:</label>
    <input 
      type="text" 
      id="spouseHomePhone" 
      name="spouseHomePhone" 
      class="phoneField"
    >
  </div>
    <p>
  <h2>Address</h2>
  </p>
    <p>
      <label for="street">STREET:</label>
      <input type="text" id="street" name="street">
    </p>
    <p>
      <label for="city">CITY:</label>
      <input type="text" id="city" name="city">
    </p>
    <p>
      <label for="state">STATE:</label>
      <input type="txt" id="state" name="state">
    </p>
    <p>
      <label for="zipCode">ZIP:</label>
      <input type="text" id="zipCode" name="zipCode">
    </p>
    <p>
  <h2>Residential</h2>
  </p>
    <p>
      <label for="hometype">RESIDENCE TYPE:</label>
      <select id="homeType" name="homeType" required>
      <option value="">--Select--</option>
          <option value="apartment">Apartment</option>
          <option value="house">House</option>
          <option value="condo">Condo</option>
          <option value="mobile home">Mobile Home</option>
          <option value="townhouse">Townhouse</option>
          <option value="duplex">Duplex</option>
          <option value="trailer">Trailer</option>
          <option value="other">Other</option>
        </select>
    </p>

    <p>
      <label for="residentType"> RESIDENT TYPE: </label>
      <select id="residentType" name="residentType" required>
          <option value="">--Select--</option>
          <option value="own">Owner</option>
          <option value="rent">Lessee</option>
          
        </select>
    </p>
    <p>
      <label for="howLong"> HOW LONG? : </label>
      <label for="years"> YEARS </label>
      <select id="years" name="years" required>
      <option value="">  0  </option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25 + </option>

          
        </select>
      <label for="months"> MONTHS </label>
      <select id="months" name="months" required>
          <option value="">  0  </option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>

        </select>
    <p>
      <label for="defendantLivesWith"> WITH WHO? :</label>
      <select id="defendantLivesWith" name="defendantLivesWith" required>
          <option value="">--Select--</option>
          <option value="self">Self</option>
          <option value="roomate">Roomate</option>
          <option value="husband">Husband</option>
          <option value="wife">Wife</option>
          <option value="son">Son</option>
          <option value="daughter">Daughter</option>
          <option value="children">Children</option>
          <option value="girlfriend">Girlfriend</option>
          <option value="boyfriend">Boyfriend</option>
          <option value="sibling">Sibling</option>
          <option value="grandparent">Grandparent</option>
          <option value="grandchild">Grandchild</option>
          <option value="aunt">Aunt</option>
          <option value="uncle">Uncle</option>
          <option value="cousin">Cousin</option>
          <option value="grandmother">Grandmother</option>
          <option value="grandfather">Grandfather</option>
          <option value="friends">Friends</option>
          <option value="parents">Parents</option>
          <option value="other">Other</option>
        </select>
    </p>
    
    
    <p>
  <h2>Vehicle</h2>
  </p>
    <p>
      <label for="vehicleYear">VEHICLE YEAR:</label>
      <input type="text" id="vehicleYear" name="vehicleYear">
    </p>

    <p>
      <label for="make">MAKE:</label>
      <input type="text" id="make" name="make">
    </p>

    <p>
      <label for="model">MODEL:</label>
      <input type="text" id="model" name="model">
    </p>

    <p>
      <label for="color">COLOR:</label>
      <input type="text" id="color" name="color">
    </p>

    <p>
      <label for="tagNumber">TAG #:</label>
      <input type="text" id="tagNumber" name="tagNumber">
    </p>
    <p>
  <h2>Employment </h2>
  </p>
    <p>
      <label for="employer">EMPLOYER:</label>
      <input type="text" id="employer" name="employer">
    </p>

    <p>
      <label for="city">CITY:</label>
      <input type="text" id="city" name="city">
    </p>

    <p>
      <label for="phone">PHONE:</label>
      <input type="text" id="phone" name="phone">
    </p>

    <p>
      <label for="previousEmployer">PREVR EMPLOYE:</label>
      <input type="text" id="previousEmployer" name="previousEmployer">
    </p>

    <p>
      <label for="previousEmployerCity">CITY:</label>
      <input type="text" id="previousEmployerCity" name="previousEmployerCity">
    </p>

    <p>
      <label for="previousEmployerWhen">WHEN:</label>
      <input type="text" id="previousEmployerWhen" name="previousEmployerWhen">
    </p>
    <p>
    <h2>Prior Arrest</h2>
    <p>
  <label class="switch">
    <input 
      type="checkbox" 
      id="priorArrestToggle" 
      name="priorArrestToggle"
      onclick="toggleArrestContainer()"
    >
    <span class="slider round"></span>
  </label>


  <!-- Hidden by default, shown if toggle is ON -->
  <div id="priorArrestContainer" class="hidden">
  
      <label for="previousArrestCounty">COUNTY:</label>
      <input type="text" id="previousArrestCounty" name="previousArrestCounty">
      <select>  <option value="">--Select a County--</option>
        <option value="appling">Appling County</option>
        <option value="atkinson">Atkinson County</option>
        <option value="bacon">Bacon County</option>
        <option value="baker">Baker County</option>
        <option value="baldwin">Baldwin County</option>
        <option value="banks">Banks County</option>
        <option value="barrow">Barrow County</option>
        <option value="bartow">Bartow County</option>
        <option value="ben_hill">Ben Hill County</option>
        <option value="berrien">Berrien County</option>
        <option value="bibb">Bibb County</option>
        <option value="bleckley">Bleckley County</option>
        <option value="brantley">Brantley County</option>
        <option value="brooks">Brooks County</option>
        <option value="bryan">Bryan County</option>
        <option value="bulloch">Bulloch County</option>
        <option value="burke">Burke County</option>
        <option value="butts">Butts County</option>
        <option value="Calhoun County">Calhoun County</option>
<option value="Camden County">Camden County</option>
<option value="Candler County">Candler County</option>
<option value="Carroll County">Carroll County</option>
<option value="Catoosa County">Catoosa County</option>
<option value="Charlton County">Charlton County</option>
<option value="Chatham County">Chatham County</option>
<option value="Chattahoochee County">Chattahoochee County</option>
<option value="Chattooga County">Chattooga County</option>
<option value="Cherokee County">Cherokee County</option>
<option value="Clarke County">Clarke County</option>
<option value="Clay County">Clay County</option>
<option value="Clayton County">Clayton County</option>
<option value="Clinch County">Clinch County</option>
<option value="Cobb County">Cobb County</option>
<option value="Coffee County">Coffee County</option>
<option value="Colquitt County">Colquitt County</option>
<option value="Columbia County">Columbia County</option>
<option value="Cook County">Cook County</option>
<option value="Coweta County">Coweta County</option>
<option value="Crawford County">Crawford County</option>
<option value="Crisp County">Crisp County</option>
<option value="Dade County">Dade County</option>
<option value="Dawson County">Dawson County</option>
<option value="DeKalb County">DeKalb County</option>
<option value="Decatur County">Decatur County</option>
<option value="Dodge County">Dodge County</option>
<option value="Dooly County">Dooly County</option>
<option value="Dougherty County">Dougherty County</option>
<option value="Douglas County">Douglas County</option>
<option value="Early County">Early County</option>
<option value="Echols County">Echols County</option>
<option value="Effingham County">Effingham County</option>
<option value="Elbert County">Elbert County</option>
<option value="Emanuel County">Emanuel County</option>
<option value="Evans County">Evans County</option>
<option value="Fannin County">Fannin County</option>
<option value="Fayette County">Fayette County</option>
<option value="Floyd County">Floyd County</option>
<option value="Forsyth County">Forsyth County</option>
<option value="Franklin County">Franklin County</option>
<option value="Fulton County">Fulton County</option>
<option value="Gilmer County">Gilmer County</option>
<option value="Glascock County">Glascock County</option>
<option value="Glynn County">Glynn County</option>
<option value="Gordon County">Gordon County</option>
<option value="Grady County">Grady County</option>
<option value="Greene County">Greene County</option>
<option value="Gwinnett County">Gwinnett County</option>
<option value="Habersham County">Habersham County</option>
<option value="Hall County">Hall County</option>
<option value="Hancock County">Hancock County</option>
<option value="Haralson County">Haralson County</option>
<option value="Harris County">Harris County</option>
<option value="Hart County">Hart County</option>
<option value="Heard County">Heard County</option>
<option value="Henry County">Henry County</option>
<option value="Houston County">Houston County</option>
<option value="Irwin County">Irwin County</option>
<option value="Jackson County">Jackson County</option>
<option value="Jasper County">Jasper County</option>
<option value="Jeff Davis County">Jeff Davis County</option>
<option value="Jefferson County">Jefferson County</option>
<option value="Jenkins County">Jenkins County</option>
<option value="Johnson County">Johnson County</option>
<option value="Jones County">Jones County</option>
<option value="Lamar County">Lamar County</option>
<option value="Lanier County">Lanier County</option>
<option value="Laurens County">Laurens County</option>
<option value="Lee County">Lee County</option>
<option value="Liberty County">Liberty County</option>
<option value="Lincoln County">Lincoln County</option>
<option value="Long County">Long County</option>
<option value="Lowndes County">Lowndes County</option>
<option value="Lumpkin County">Lumpkin County</option>
<option value="Macon County">Macon County</option>
<option value="Madison County">Madison County</option>
<option value="Marion County">Marion County</option>
<option value="McDuffie County">McDuffie County</option>
<option value="McIntosh County">McIntosh County</option>
<option value="Meriwether County">Meriwether County</option>
<option value="Miller County">Miller County</option>
<option value="Mitchell County">Mitchell County</option>
<option value="Monroe County">Monroe County</option>
<option value="Montgomery County">Montgomery County</option>
<option value="Morgan County">Morgan County</option>
<option value="Murray County">Murray County</option>
<option value="Muscogee County">Muscogee County</option>
<option value="Newton County">Newton County</option>
<option value="Oconee County">Oconee County</option>
<option value="Oglethorpe County">Oglethorpe County</option>
<option value="Paulding County">Paulding County</option>
<option value="Peach County">Peach County</option>
<option value="Pickens County">Pickens County</option>
<option value="Pierce County">Pierce County</option>
<option value="Pike County">Pike County</option>
<option value="Polk County">Polk County</option>
<option value="Pulaski County">Pulaski County</option>
<option value="Putnam County">Putnam County</option>
<option value="Quitman County">Quitman County</option>
<option value="Rabun County">Rabun County</option>
<option value="Randolph County">Randolph County</option>
<option value="Richmond County">Richmond County</option>
<option value="Rockdale County">Rockdale County</option>
<option value="Schley County">Schley County</option>
<option value="Screven County">Screven County</option>
<option value="Seminole County">Seminole County</option>
<option value="Spalding County">Spalding County</option>
<option value="Stephens County">Stephens County</option>
<option value="Stewart County">Stewart County</option>
<option value="Sumter County">Sumter County</option>
<option value="Talbot County">Talbot County</option>
<option value="Taliaferro County">Taliaferro County</option>
<option value="Tattnall County">Tattnall County</option>
<option value="Taylor County">Taylor County</option>
<option value="Telfair County">Telfair County</option>
<option value="Terrell County">Terrell County</option>
<option value="Thomas County">Thomas County</option>
<option value="Tift County">Tift County</option>
<option value="Toombs County">Toombs County</option>
<option value="Towns County">Towns County</option>
<option value="Treutlen County">Treutlen County</option>
<option value="Troup County">Troup County</option>
<option value="Turner County">Turner County</option>
<option value="Twiggs County">Twiggs County</option>
<option value="Union County">Union County</option>
<option value="Upson County">Upson County</option>
<option value="Walker County">Walker County</option>
<option value="Walton County">Walton County</option>
<option value="Ware County">Ware County</option>
<option value="Warren County">Warren County</option>
<option value="Washington County">Washington County</option>
<option value="Wayne County">Wayne County</option>
<option value="Webster County">Webster County</option>
<option value="Wheeler County">Wheeler County</option>
<option value="White County">White County</option>
<option value="Whitfield County">Whitfield County</option>
<option value="Wilcox County">Wilcox County</option>
<option value="Wilkes County">Wilkes County</option>
<option value="Wilkinson County">Wilkinson County</option>
<option value="Worth County">Worth County</option>
    </select>
    </p>
    <p>
      <label for="previousArrestWhen">WHEN:</label>
      <input type="text" id="previousArrestWhen" name="previousArrestWhen">
    </p>
    <p>
      <label for="bondedBy">BONDED BY:</label>
      <input type="text" id="bondedBy" name="bondedBy">
    </p>
    <p>
      <label for="codefendants">CO-DEFENDANTS:</label>
      <input type="text" id="codefendants" name="codefendants">
    </p>
    <p>
      <label for="codefendantsBondedBy">BONDED BY:</label>
      <input type="text" id="codefendantsBondedBy" name="codefendantsBondedBy">
    </p>
 

  <hr>

  <!-- PROBATION TOGGLE -->
  <h2>Probation</h2>
  <label class="switch">
    <input 
      type="checkbox" 
      id="probationToggle" 
      name="probationToggle"
      onclick="toggleProbationContainer()"
    >
    <span class="slider round"></span>
  </label>


  <!-- Hidden by default, shown if toggle is ON -->
  <div id="probationContainer" class="hidden">
    <p>
      <label for="officer">OFFICER NAME:</label>
   </p>
   <p>
      <label for="officer">FIRST</label>
      <input type="text" id="first" name="first">
      <label for="last">LAST:</label>
      <input type="text" id="last" name="last">

    </p>
    <p>
    <label for="probationCounty">COUNTY:</label>
      <select>  <option value="">--Select a County--</option>
        <option value="appling">Appling County</option>
        <option value="atkinson">Atkinson County</option>
        <option value="bacon">Bacon County</option>
        <option value="baker">Baker County</option>
        <option value="baldwin">Baldwin County</option>
        <option value="banks">Banks County</option>
        <option value="barrow">Barrow County</option>
        <option value="bartow">Bartow County</option>
        <option value="ben_hill">Ben Hill County</option>
        <option value="berrien">Berrien County</option>
        <option value="bibb">Bibb County</option>
        <option value="bleckley">Bleckley County</option>
        <option value="brantley">Brantley County</option>
        <option value="brooks">Brooks County</option>
        <option value="bryan">Bryan County</option>
        <option value="bulloch">Bulloch County</option>
        <option value="burke">Burke County</option>
        <option value="butts">Butts County</option>
        <option value="Calhoun County">Calhoun County</option>
<option value="Camden County">Camden County</option>
<option value="Candler County">Candler County</option>
<option value="Carroll County">Carroll County</option>
<option value="Catoosa County">Catoosa County</option>
<option value="Charlton County">Charlton County</option>
<option value="Chatham County">Chatham County</option>
<option value="Chattahoochee County">Chattahoochee County</option>
<option value="Chattooga County">Chattooga County</option>
<option value="Cherokee County">Cherokee County</option>
<option value="Clarke County">Clarke County</option>
<option value="Clay County">Clay County</option>
<option value="Clayton County">Clayton County</option>
<option value="Clinch County">Clinch County</option>
<option value="Cobb County">Cobb County</option>
<option value="Coffee County">Coffee County</option>
<option value="Colquitt County">Colquitt County</option>
<option value="Columbia County">Columbia County</option>
<option value="Cook County">Cook County</option>
<option value="Coweta County">Coweta County</option>
<option value="Crawford County">Crawford County</option>
<option value="Crisp County">Crisp County</option>
<option value="Dade County">Dade County</option>
<option value="Dawson County">Dawson County</option>
<option value="DeKalb County">DeKalb County</option>
<option value="Decatur County">Decatur County</option>
<option value="Dodge County">Dodge County</option>
<option value="Dooly County">Dooly County</option>
<option value="Dougherty County">Dougherty County</option>
<option value="Douglas County">Douglas County</option>
<option value="Early County">Early County</option>
<option value="Echols County">Echols County</option>
<option value="Effingham County">Effingham County</option>
<option value="Elbert County">Elbert County</option>
<option value="Emanuel County">Emanuel County</option>
<option value="Evans County">Evans County</option>
<option value="Fannin County">Fannin County</option>
<option value="Fayette County">Fayette County</option>
<option value="Floyd County">Floyd County</option>
<option value="Forsyth County">Forsyth County</option>
<option value="Franklin County">Franklin County</option>
<option value="Fulton County">Fulton County</option>
<option value="Gilmer County">Gilmer County</option>
<option value="Glascock County">Glascock County</option>
<option value="Glynn County">Glynn County</option>
<option value="Gordon County">Gordon County</option>
<option value="Grady County">Grady County</option>
<option value="Greene County">Greene County</option>
<option value="Gwinnett County">Gwinnett County</option>
<option value="Habersham County">Habersham County</option>
<option value="Hall County">Hall County</option>
<option value="Hancock County">Hancock County</option>
<option value="Haralson County">Haralson County</option>
<option value="Harris County">Harris County</option>
<option value="Hart County">Hart County</option>
<option value="Heard County">Heard County</option>
<option value="Henry County">Henry County</option>
<option value="Houston County">Houston County</option>
<option value="Irwin County">Irwin County</option>
<option value="Jackson County">Jackson County</option>
<option value="Jasper County">Jasper County</option>
<option value="Jeff Davis County">Jeff Davis County</option>
<option value="Jefferson County">Jefferson County</option>
<option value="Jenkins County">Jenkins County</option>
<option value="Johnson County">Johnson County</option>
<option value="Jones County">Jones County</option>
<option value="Lamar County">Lamar County</option>
<option value="Lanier County">Lanier County</option>
<option value="Laurens County">Laurens County</option>
<option value="Lee County">Lee County</option>
<option value="Liberty County">Liberty County</option>
<option value="Lincoln County">Lincoln County</option>
<option value="Long County">Long County</option>
<option value="Lowndes County">Lowndes County</option>
<option value="Lumpkin County">Lumpkin County</option>
<option value="Macon County">Macon County</option>
<option value="Madison County">Madison County</option>
<option value="Marion County">Marion County</option>
<option value="McDuffie County">McDuffie County</option>
<option value="McIntosh County">McIntosh County</option>
<option value="Meriwether County">Meriwether County</option>
<option value="Miller County">Miller County</option>
<option value="Mitchell County">Mitchell County</option>
<option value="Monroe County">Monroe County</option>
<option value="Montgomery County">Montgomery County</option>
<option value="Morgan County">Morgan County</option>
<option value="Murray County">Murray County</option>
<option value="Muscogee County">Muscogee County</option>
<option value="Newton County">Newton County</option>
<option value="Oconee County">Oconee County</option>
<option value="Oglethorpe County">Oglethorpe County</option>
<option value="Paulding County">Paulding County</option>
<option value="Peach County">Peach County</option>
<option value="Pickens County">Pickens County</option>
<option value="Pierce County">Pierce County</option>
<option value="Pike County">Pike County</option>
<option value="Polk County">Polk County</option>
<option value="Pulaski County">Pulaski County</option>
<option value="Putnam County">Putnam County</option>
<option value="Quitman County">Quitman County</option>
<option value="Rabun County">Rabun County</option>
<option value="Randolph County">Randolph County</option>
<option value="Richmond County">Richmond County</option>
<option value="Rockdale County">Rockdale County</option>
<option value="Schley County">Schley County</option>
<option value="Screven County">Screven County</option>
<option value="Seminole County">Seminole County</option>
<option value="Spalding County">Spalding County</option>
<option value="Stephens County">Stephens County</option>
<option value="Stewart County">Stewart County</option>
<option value="Sumter County">Sumter County</option>
<option value="Talbot County">Talbot County</option>
<option value="Taliaferro County">Taliaferro County</option>
<option value="Tattnall County">Tattnall County</option>
<option value="Taylor County">Taylor County</option>
<option value="Telfair County">Telfair County</option>
<option value="Terrell County">Terrell County</option>
<option value="Thomas County">Thomas County</option>
<option value="Tift County">Tift County</option>
<option value="Toombs County">Toombs County</option>
<option value="Towns County">Towns County</option>
<option value="Treutlen County">Treutlen County</option>
<option value="Troup County">Troup County</option>
<option value="Turner County">Turner County</option>
<option value="Twiggs County">Twiggs County</option>
<option value="Union County">Union County</option>
<option value="Upson County">Upson County</option>
<option value="Walker County">Walker County</option>
<option value="Walton County">Walton County</option>
<option value="Ware County">Ware County</option>
<option value="Warren County">Warren County</option>
<option value="Washington County">Washington County</option>
<option value="Wayne County">Wayne County</option>
<option value="Webster County">Webster County</option>
<option value="Wheeler County">Wheeler County</option>
<option value="White County">White County</option>
<option value="Whitfield County">Whitfield County</option>
<option value="Wilcox County">Wilcox County</option>
<option value="Wilkes County">Wilkes County</option>
<option value="Wilkinson County">Wilkinson County</option>
<option value="Worth County">Worth County</option>
    </select>
    </p>
  </div>
  </div>

  <h2>Marital Status</h2>
  
  <!-- Toggle switch container -->
  <label class="switch">
    <input 
      type="checkbox"
      id="maritalStatusToggle"
      name="maritalStatusToggle"
      onclick="toggleMaritalStatusContainer()"
    >
    <span class="slider"></span>
  </label>
  <!-- Label text near the switch if desired -->
  <span>OFF (Single) / ON (Legaly Married)</span>

  <hr>

  <!-- Spouse / Significant Other Section (hidden by default) -->
  <div id="defendantSpouseSection" class="hidden">
    <h2>Spouse</h2>
    <h3>General</h3>
    <p>
      <label for="spouseFirstName">FIRST NAME:</label>
      <input type="text" id="spouseFirstName" name="spouseFirstName">
    </p>
    <p>
      <label for="spouseMiddleName">MIDDLE NAME:</label>
      <input type="text" id="spouseMiddleName" name="spouseMiddleName">
    </p>
    <p>
      <label for="spouseLastName">LAST NAME:</label>
      <input type="text" id="spouseLastName" name="spouseLastName">
    </p>
    <p>
      <label for="spouseDob">DOB:</label>
      <input type="text" id="spouseDob" name="spouseDob">
    </p>
    <p>
      <label for="spouseSsn">SS #:</label>
      <input type="text" id="spouseSsn" name="spouseSsn">
    </p>

    <h3>Contact</h3>
    <p>
      <label for="spouseCell">CELL:</label>
      <input type="text" id="spouseCell" name="spouseCell">
    </p>
    <p>
      <label for="spouseHomePhone">HOME/OTHER:</label>
      <input type="text" id="spouseHomePhone" name="spouseHomePhone">
    </p>
    <p>
      <label for="spouseEmail">EMAIL:</label>
      <input type="text" id="spouseEmail" name="spouseEmail">
    </p>

    <h3>Address</h3>
    <p>
      <label for="spouseStreet">STREET:</label>
      <input type="text" id="spouseStreet" name="spouseStreet">
    </p>
    <p>
      <label for="spouseCity">CITY:</label>
      <input type="text" id="spouseCity" name="spouseCity">
    </p>
    <p>
      <label for="spouseState">STATE:</label>
      <input type="text" id="spouseState" name="spouseState">
    </p>
    <p>
      <label for="spouseZipCode">ZIP:</label>
      <input type="text" id="spouseZipCode" name="spouseZipCode">
    </p>

    <h3>Vehicle</h3>
    <p>
      <label for="spouseVehicleYear">VEH YEAR:</label>
      <input type="text" id="spouseVehicleYear" name="spouseVehicleYear">
    </p>
    <p>
      <label for="spouseMake">MAKE:</label>
      <input type="text" id="spouseMake" name="spouseMake">
    </p>
    <p>
      <label for="spouseModel">MODEL:</label>
      <input type="text" id="spouseModel" name="spouseModel">
    </p>
    <p>
      <label for="spouseColor">COLOR:</label>
      <input type="text" id="spouseColor" name="spouseColor">
    </p>
    <p>
      <label for="spouseTag">TAG #:</label>
      <input type="text" id="spouseTag" name="spouseTag">
    </p>
  </div>
    <hr>
    <div class="section-container">
    <h2>Mother</h2>
    <div class="status-row">
      <label for="motherStatus">Status:</label>
      <select 
        id="motherStatus" 
        name="motherStatus" 
        onchange="handleMotherStatusChange()"
      >
        <option value="contact" selected>IN CONTACT</option>
        <option value="noContact">NO CONTACT</option>
        <option value="incarcerated">INCARCERATED</option>
        <option value="deceased">DECEASED</option>
      </select>

    <p>
      <label for="motherFname">FIRST NAME:</label>
      <input type="text" id="motherFname" name="motherFname">
    </p>
    <p>
      <label for="motherLname">LAST NAME:</label>
      <input type="text" id="motherLname" name="motherLname">
    </p>
    <p>
      <label for="motherCity">CITY:</label>
      <input type="text" id="motherCity" name="motherCity">
    </p>
    <p>
      <label for="motherState">STATE:</label>
      <input type="txt" id="motherState" name="motherState">
    </p>

    <p>
    <label for="motherPhoneInput">PHONE:</label>
    <input type="text" id="motherPhoneInput" name="motherPhoneInput" placeholder="123-456-7890">
  </p>

  </div>
 
  <div class="section-container">
    <h2>Father</h2>
    <div class="status-row">
      <label for="fatherStatus">Status:</label>
      <select 
        id="fatherStatus" 
        name="fatherStatus"
        onchange="handleFatherStatusChange()"
      >
        <option value="contact" selected>IN CONTACT</option>
        <option value="noContact">NO CONTACT</option>
        <option value="incarcerated">INCARCERATED</option>
        <option value="deceased">DECEASED</option>
      </select>
  <p>
      <label for="fatherFname">FIRST NAME:</label>
      <input type="text" id="fatherFname" name="fatherFname">
    </p>
    <p>
      <label for="fatherlname">LAST NAME:</label>
      <input type="text" id="fatherlname" name="fatherlname">
    </p>

    <p>
      <label for="fatherCity">CITY:</label>
      <input type="text" id="fatherCity" name="fatherCity">
    </p>
    <p>
      <label for="fatherState">STATE:</label>
      <input type="txt" id="fatherState" name="fatherState">
    </p>

    <p>
    <label for="fatherPhoneInput">PHONE:</label>
    <input type="text" id="fatherPhoneInput" name="fatherPhoneInput" placeholder="123-456-7890">
    </p>
</div>
    <hr>

    <h2>References</h2>

   <p> <h3>Refeference #1 </h3></p>
<p>
  <label for="reference1FirstName">FIRST NAME:</label>
  <input type="text" id="reference1FirstName" name="reference1FirstName">
</p>

<p>
  <label for="reference1LastName">LAST NAME:</label>
  <input type="text" id="reference1LastName" name="reference1LastName">
</p>

<p>
  <label for="reference1City">CITY:</label>
  <input type="text" id="reference1City" name="reference1City">
</p>

<p>
  <label for="reference1State">STATE:</label>
  <input type="text" id="reference1State" name="reference1State">
</p>
<p>
  <label for="reference1Relation">RELATION:</label>
  <select id="reference1Relation" name="reference1Relation">
  <option value="0">---Select---</option>
        <option value="58759">Agent</option>
        <option value="58755">Attorney</option>
        <option value="58742">Aunt</option>
        <option value="58741">Boyfriend</option>
        <option value="58733">Brother</option>
        <option value="58749">Brother in law</option>
        <option value="62211">Child's Father</option>
        <option value="62212">Child's Mother</option>
        <option value="62205">Co-Worker</option>
        <option value="58744">Cousin</option>
        <option value="58731">Daughter</option>
        <option value="58754">Daughter in law</option>
        <option value="65532">Employee</option>
        <option value="58756">Employer</option>
        <option value="62207">Ex-Husband</option>
        <option value="62208">Ex-Partner</option>
        <option value="62206">Ex-Wife</option>
        <option value="58729">Father</option>
        <option value="58750">Father in law</option>
        <option value="65531">Fiance`</option>
        <option value="58735">Friend</option>
        <option value="58740">Girlfriend</option>
        <option value="62001">God Father</option>
        <option value="62000">God Mother</option>
        <option value="58745">Grand Daughter</option>
        <option value="58737">Grand Father</option>
        <option value="58736">Grand Mother</option>
        <option value="58746">Grand Son</option>
        <option value="61603">Great Aunt</option>
        <option value="61606">Great Granddaughter</option>
        <option value="61602">Great Grandfather</option>
        <option value="61601">Great Grandmother</option>
        <option value="61605">Great Grandson</option>
        <option value="61604">Great Uncle</option>
        <option value="62215">Half Brother</option>
        <option value="62216">Half Sister</option>
        <option value="58739">Husband</option>
        <option value="58758">Manager</option>
        <option value="58757">Manager Business</option>
        <option value="58730">Mother</option>
        <option value="58751">Mother in law</option>
        <option value="58747">Neice</option>
        <option value="65530">Neighbor</option>
        <option value="58748">Nephew</option>
        <option value="62209">Partner</option>
        <option value="58760">Pastor</option>
        <option value="58762">Priest</option>
        <option value="58764">Probation officer</option>
        <option value="58761">Rabbi</option>
        <option value="61328">Roomate</option>
        <option value="62210">Roomate</option>
        <option value="1">Self</option>
        <option value="58728">Self</option>
        <option value="58734">Sister</option>
        <option value="58752">Sister in law</option>
        <option value="58732">Son</option>
        <option value="58753">Son in law</option>
        <option value="58765">Sponsor to name a few</option>
        <option value="61332">Step-Brother</option>
        <option value="61333">Step-Daughter</option>
        <option value="61330">Step-Father</option>
        <option value="61329">Step-Mother</option>
        <option value="61331">Step-Sister</option>
        <option value="61334">Step-Son</option>
        <option value="58763">Teacher</option>
        <option value="58743">Uncle</option>
        <option value="58738">Wife</option>
      </select>

</p>
<p>
  <label for="reference1Phone">PHONE:</label>
  <input type="text" id="reference1Phone" name="reference1Phone">
</p>

<p> <h3>Refeference #2 </h3></p>
<p>
  <label for="reference2FirstName">FIRST NAME:</label>
  <input type="text" id="reference2FirstName" name="reference2FirstName">
</p>

<p>
  <label for="reference2LastName">LAST NAME:</label>
  <input type="text" id="reference2LastName" name="reference2LastName">
</p>

<p>
  <label for="reference2City">CITY:</label>
  <input type="text" id="reference2City" name="reference2City">
</p>

<p>
  <label for="reference2State">STATE:</label>
  <input type="text" id="reference2State" name="reference2State">
</p>

<p>
  <label for="reference2Relation">RELATION:</label>
   <select id="reference2Relation" name="reference2Relation">
  <option value="0">---Select---</option>
        <option value="58759">Agent</option>
        <option value="58755">Attorney</option>
        <option value="58742">Aunt</option>
        <option value="58741">Boyfriend</option>
        <option value="58733">Brother</option>
        <option value="58749">Brother in law</option>
        <option value="62211">Child's Father</option>
        <option value="62212">Child's Mother</option>
        <option value="62205">Co-Worker</option>
        <option value="58744">Cousin</option>
        <option value="58731">Daughter</option>
        <option value="58754">Daughter in law</option>
        <option value="65532">Employee</option>
        <option value="58756">Employer</option>
        <option value="62207">Ex-Husband</option>
        <option value="62208">Ex-Partner</option>
        <option value="62206">Ex-Wife</option>
        <option value="58729">Father</option>
        <option value="58750">Father in law</option>
        <option value="65531">Fiance`</option>
        <option value="58735">Friend</option>
        <option value="58740">Girlfriend</option>
        <option value="62001">God Father</option>
        <option value="62000">God Mother</option>
        <option value="58745">Grand Daughter</option>
        <option value="58737">Grand Father</option>
        <option value="58736">Grand Mother</option>
        <option value="58746">Grand Son</option>
        <option value="61603">Great Aunt</option>
        <option value="61606">Great Granddaughter</option>
        <option value="61602">Great Grandfather</option>
        <option value="61601">Great Grandmother</option>
        <option value="61605">Great Grandson</option>
        <option value="61604">Great Uncle</option>
        <option value="62215">Half Brother</option>
        <option value="62216">Half Sister</option>
        <option value="58739">Husband</option>
        <option value="58758">Manager</option>
        <option value="58757">Manager Business</option>
        <option value="58730">Mother</option>
        <option value="58751">Mother in law</option>
        <option value="58747">Neice</option>
        <option value="65530">Neighbor</option>
        <option value="58748">Nephew</option>
        <option value="62209">Partner</option>
        <option value="58760">Pastor</option>
        <option value="58762">Priest</option>
        <option value="58764">Probation officer</option>
        <option value="58761">Rabbi</option>
        <option value="61328">Roomate</option>
        <option value="62210">Roomate</option>
        <option value="1">Self</option>
        <option value="58728">Self</option>
        <option value="58734">Sister</option>
        <option value="58752">Sister in law</option>
        <option value="58732">Son</option>
        <option value="58753">Son in law</option>
        <option value="58765">Sponsor to name a few</option>
        <option value="61332">Step-Brother</option>
        <option value="61333">Step-Daughter</option>
        <option value="61330">Step-Father</option>
        <option value="61329">Step-Mother</option>
        <option value="61331">Step-Sister</option>
        <option value="61334">Step-Son</option>
        <option value="58763">Teacher</option>
        <option value="58743">Uncle</option>
        <option value="58738">Wife</option>
      </select>
</p>

<p>
  <label for="reference2Phone">PHONE:</label>
  <input type="text" id="reference2Phone" name="reference2Phone">
</p>

<p> <h3>Refeference #3 </h3></p>
<p>
  <label for="reference3FirstName">FIRST NAME:</label>
  <input type="text" id="reference3FirstName" name="reference3FirstName">
</p>

<p>
  <label for="reference3LastName">LAST NAME:</label>
  <input type="text" id="reference3LastName" name="reference3LastName">
</p>

<p>
  <label for="reference3City">CITY:</label>
  <input type="text" id="reference3City" name="reference3City">
</p>

<p>
  <label for="reference3State">STATE:</label>
  <input type="text" id="reference3State" name="reference3State">
</p>

<p>
  <label for="reference3Relation">RELATION:</label>
  <select id="reference3Relation" name="reference3Relation">
  <option value="0">---Select---</option>
        <option value="58759">Agent</option>
        <option value="58755">Attorney</option>
        <option value="58742">Aunt</option>
        <option value="58741">Boyfriend</option>
        <option value="58733">Brother</option>
        <option value="58749">Brother in law</option>
        <option value="62211">Child's Father</option>
        <option value="62212">Child's Mother</option>
        <option value="62205">Co-Worker</option>
        <option value="58744">Cousin</option>
        <option value="58731">Daughter</option>
        <option value="58754">Daughter in law</option>
        <option value="65532">Employee</option>
        <option value="58756">Employer</option>
        <option value="62207">Ex-Husband</option>
        <option value="62208">Ex-Partner</option>
        <option value="62206">Ex-Wife</option>
        <option value="58729">Father</option>
        <option value="58750">Father in law</option>
        <option value="65531">Fiance`</option>
        <option value="58735">Friend</option>
        <option value="58740">Girlfriend</option>
        <option value="62001">God Father</option>
        <option value="62000">God Mother</option>
        <option value="58745">Grand Daughter</option>
        <option value="58737">Grand Father</option>
        <option value="58736">Grand Mother</option>
        <option value="58746">Grand Son</option>
        <option value="61603">Great Aunt</option>
        <option value="61606">Great Granddaughter</option>
        <option value="61602">Great Grandfather</option>
        <option value="61601">Great Grandmother</option>
        <option value="61605">Great Grandson</option>
        <option value="61604">Great Uncle</option>
        <option value="62215">Half Brother</option>
        <option value="62216">Half Sister</option>
        <option value="58739">Husband</option>
        <option value="58758">Manager</option>
        <option value="58757">Manager Business</option>
        <option value="58730">Mother</option>
        <option value="58751">Mother in law</option>
        <option value="58747">Neice</option>
        <option value="65530">Neighbor</option>
        <option value="58748">Nephew</option>
        <option value="62209">Partner</option>
        <option value="58760">Pastor</option>
        <option value="58762">Priest</option>
        <option value="58764">Probation officer</option>
        <option value="58761">Rabbi</option>
        <option value="61328">Roomate</option>
        <option value="62210">Roomate</option>
        <option value="1">Self</option>
        <option value="58728">Self</option>
        <option value="58734">Sister</option>
        <option value="58752">Sister in law</option>
        <option value="58732">Son</option>
        <option value="58753">Son in law</option>
        <option value="58765">Sponsor to name a few</option>
        <option value="61332">Step-Brother</option>
        <option value="61333">Step-Daughter</option>
        <option value="61330">Step-Father</option>
        <option value="61329">Step-Mother</option>
        <option value="61331">Step-Sister</option>
        <option value="61334">Step-Son</option>
        <option value="58763">Teacher</option>
        <option value="58743">Uncle</option>
        <option value="58738">Wife</option>
      </select>

<p>
  <label for="reference3Phone">PHONE:</label>
  <input type="text" id="reference3Phone" name="reference3Phone">
</p>


    <hr>

    <h2>Attorney</h2>
    <p>
      <label for="attorneyFname">FIRST:</label>
      <input type="text" id="attorneyFname" name="attorneyFname">
    </p>

    <p>
      <label for="attorneyLname">LAST:</label>
      <input type="text" id="attorneyLname" name="attorneyLname">
    </p>

    <p>
      <label for="attorneyPhone">PHONE:</label>
      <input type="text" id="attorneyPhone" name="attorneyPhone">
    </p>

    <hr>

    <h2>Co-Signer #1</h2>
   
<p>
  <label for="coSignerFirstName">FIRST:</label>
  <input type="text" id="coSignerFirstName" name="coSignerFirstName">
</p>

<div id="coSignerMiddleNameContainer">
    <p>
      <label for="coSignerMiddleName">MIDDLE:</label>
      <input type="text" id="coSignerMiddleName" name="coSignerMiddleName">
    </p>
  </div>
  <!-- Button to add another Co-Signer Middle Name -->

    <button type="button" onclick="addCoSignerMiddleName()"> + </button>


<p>
  <label for="coSignerLastName">LAST:</label>
  <input type="text" id="coSignerLastName" name="coSignerLastName">
</p>
<p>
      <label for="cosDob">DOB:</label>
      <input type="text" id="cosDob" name="cosDob">
    </p>
    <p>
      <label for="cosSsn">SS #:</label>
      <input type="text" id="cosSsn" name="cosSsn">
    </p>

    <p>
      <label for="cosDriversLic">DRIVERS LIC #:</label>
      <input type="text" id="cosDriversLic" name="cosDriversLic">
    </p>
    <p>
    <label for="cosRelation">RELATION:</label>
      <select id="cosRelation" name="cosRelation">
        <option value="0">---Select---</option>
        <option value="58759">Agent</option>
        <option value="58755">Attorney</option>
        <option value="58742">Aunt</option>
        <option value="58741">Boyfriend</option>
        <option value="58733">Brother</option>
        <option value="58749">Brother in law</option>
        <option value="62211">Child's Father</option>
        <option value="62212">Child's Mother</option>
        <option value="62205">Co-Worker</option>
        <option value="58744">Cousin</option>
        <option value="58731">Daughter</option>
        <option value="58754">Daughter in law</option>
        <option value="65532">Employee</option>
        <option value="58756">Employer</option>
        <option value="62207">Ex-Husband</option>
        <option value="62208">Ex-Partner</option>
        <option value="62206">Ex-Wife</option>
        <option value="58729">Father</option>
        <option value="58750">Father in law</option>
        <option value="65531">Fiance`</option>
        <option value="58735">Friend</option>
        <option value="58740">Girlfriend</option>
        <option value="62001">God Father</option>
        <option value="62000">God Mother</option>
        <option value="58745">Grand Daughter</option>
        <option value="58737">Grand Father</option>
        <option value="58736">Grand Mother</option>
        <option value="58746">Grand Son</option>
        <option value="61603">Great Aunt</option>
        <option value="61606">Great Granddaughter</option>
        <option value="61602">Great Grandfather</option>
        <option value="61601">Great Grandmother</option>
        <option value="61605">Great Grandson</option>
        <option value="61604">Great Uncle</option>
        <option value="62215">Half Brother</option>
        <option value="62216">Half Sister</option>
        <option value="58739">Husband</option>
        <option value="58758">Manager</option>
        <option value="58757">Manager Business</option>
        <option value="58730">Mother</option>
        <option value="58751">Mother in law</option>
        <option value="58747">Neice</option>
        <option value="65530">Neighbor</option>
        <option value="58748">Nephew</option>
        <option value="62209">Partner</option>
        <option value="58760">Pastor</option>
        <option value="58762">Priest</option>
        <option value="58764">Probation officer</option>
        <option value="58761">Rabbi</option>
        <option value="61328">Roomate</option>
        <option value="62210">Roomate</option>
        <option value="1">Self</option>
        <option value="58728">Self</option>
        <option value="58734">Sister</option>
        <option value="58752">Sister in law</option>
        <option value="58732">Son</option>
        <option value="58753">Son in law</option>
        <option value="58765">Sponsor to name a few</option>
        <option value="61332">Step-Brother</option>
        <option value="61333">Step-Daughter</option>
        <option value="61330">Step-Father</option>
        <option value="61329">Step-Mother</option>
        <option value="61331">Step-Sister</option>
        <option value="61334">Step-Son</option>
        <option value="58763">Teacher</option>
        <option value="58743">Uncle</option>
        <option value="58738">Wife</option>
      </select>
    </p>

    <h2>Address</h2>
<p>
  <label for="coSignerStreet">STREET</label>
  <input type="text" id="coSignerStreet" name="coSignerStreet">
</p>

<p>
  <label for="coSignerCity">CITY:</label>
  <input type="text" id="coSignerCity" name="coSignerCity">
</p>

<p>
  <label for="coSignerState">STATE:</label>
  <input type="text" id="coSignerState" name="coSignerState">
</p>

<p>
  <label for="coSignerZip">ZIP:</label>
  <input type="text" id="coSignerZip" name="coSignerZip">
</p>

    <p>
      <label for="cosPhone">PHONE:</label>
      <input type="text" id="cosPhone" name="cosPhone">
    </p>

    <p>
      <label for="cosEmail">EMAIL:</label>
      <input type="text" id="cosEmail" name="cosEmail">
    </p>
    <h2>Vehicle</h2>
    <p>
      <label for="cosVehicleYear">VEH YEAR:</label>
      <input type="text" id="cosVehicleYear" name="cosVehicleYear">
    </p>

    <p>
      <label for="cosMake">MAKE:</label>
      <input type="text" id="cosMake" name="cosMake">
    </p>

    <p>
      <label for="cosModel">MODEL:</label>
      <input type="text" id="cosModel" name="cosModel">
    </p>

    <p>
      <label for="cosColor">COLOR:</label>
      <input type="text" id="cosColor" name="cosColor">
    </p>

    <p>
      <label for="cosTagNumber">TAG #:</label>
      <input type="text" id="cosTagNumber" name="cosTagNumber">
    </p>
    <h2>Employment</h2>
    <p>
      <label for="cosEmployer">EMPLOYER:</label>
      <input type="text" id="cosEmployer" name="cosEmployer">
    </p>

    <p>
  <label for="cosEmployerCity">CITY:</label>
  <input type="text" id="cosEmployerCity" name="cosEmployerCity">
</p>

<p>
  <label for="cosEmployerState">STATE:</label>
  <input type="text" id="cosEmployerState" name="cosEmployerState">
</p>

    <p>
      <label for="cosEmployerPhone">PHONE:</label>
      <input type="text" id="cosEmployerPhone" name="cosEmployerPhone">
    </p>
    <h2>Marital Status</h2>
  <label for="maritalStatusCheckbox">SINGLE</label>
  <input 
    type="checkbox" 
    id="maritalStatusCheckbox" 
    name="maritalStatusCheckbox" 
    checked 
    onclick="toggleSpouseSections()"
  >
     <!-- Co-Signer Spouse / Significant Other Section -->
  <div id="coSignerSpouseInfo" class="hidden">
    <h2>Spouse</h2>
    <p>
      <label for="coSpouseFirstName">FIRST:</label>
      <input type="text" id="coSpouseFirstName" name="coSpouseFirstName">
    </p>
    <p>
      <label for="coSpouseLastName">LAST:</label>
      <input type="text" id="coSpouseLastName" name="coSpouseLastName">
    </p>
    <p>
      <label for="coSpouseCell">CELL:</label>
      <input type="text" id="coSpouseCell" name="coSpouseCell">
    </p>
    <p>
      <label for="coSpouseEmployer">EMPLOYER:</label>
      <input type="text" id="coSpouseEmployer" name="coSpouseEmployer">
    </p>
   
    <!-- You can include additional fields here if needed -->
  </div>
    <h2>Co-Signer #1 References</h2>

    </p>
    <h3>Cos #1 Reference # 1 </h3>
    <p>
    <p>
      <label for="cosRef1fName">FIRST:</label>
      <input type="text" id="cosRef1fName" name="cosRef1fName">
    </p>
    <p>
      <label for="cosRef1lName">LAST:</label>
      <input type="text" id="cosRef1lName" name="cosRef1lName">
    </p>

<p>
  <label for="cosRef1City">CITY:</label>
  <input type="text" id="cosRef1City" name="cosRef1City">
</p>

<p>
  <label for="cosRef1State">STATE:</label>
  <input type="text" id="cosRef1State" name="cosRef1State">
</p>

    <p>
      <label for="cosRef1Relation">RELATION:</label>
      <select id="cosRef1Relation" name="cosRef1Relation">
  <option value="0">---Select---</option>
        <option value="58759">Agent</option>
        <option value="58755">Attorney</option>
        <option value="58742">Aunt</option>
        <option value="58741">Boyfriend</option>
        <option value="58733">Brother</option>
        <option value="58749">Brother in law</option>
        <option value="62211">Child's Father</option>
        <option value="62212">Child's Mother</option>
        <option value="62205">Co-Worker</option>
        <option value="58744">Cousin</option>
        <option value="58731">Daughter</option>
        <option value="58754">Daughter in law</option>
        <option value="65532">Employee</option>
        <option value="58756">Employer</option>
        <option value="62207">Ex-Husband</option>
        <option value="62208">Ex-Partner</option>
        <option value="62206">Ex-Wife</option>
        <option value="58729">Father</option>
        <option value="58750">Father in law</option>
        <option value="65531">Fiance`</option>
        <option value="58735">Friend</option>
        <option value="58740">Girlfriend</option>
        <option value="62001">God Father</option>
        <option value="62000">God Mother</option>
        <option value="58745">Grand Daughter</option>
        <option value="58737">Grand Father</option>
        <option value="58736">Grand Mother</option>
        <option value="58746">Grand Son</option>
        <option value="61603">Great Aunt</option>
        <option value="61606">Great Granddaughter</option>
        <option value="61602">Great Grandfather</option>
        <option value="61601">Great Grandmother</option>
        <option value="61605">Great Grandson</option>
        <option value="61604">Great Uncle</option>
        <option value="62215">Half Brother</option>
        <option value="62216">Half Sister</option>
        <option value="58739">Husband</option>
        <option value="58758">Manager</option>
        <option value="58757">Manager Business</option>
        <option value="58730">Mother</option>
        <option value="58751">Mother in law</option>
        <option value="58747">Neice</option>
        <option value="65530">Neighbor</option>
        <option value="58748">Nephew</option>
        <option value="62209">Partner</option>
        <option value="58760">Pastor</option>
        <option value="58762">Priest</option>
        <option value="58764">Probation officer</option>
        <option value="58761">Rabbi</option>
        <option value="61328">Roomate</option>
        <option value="62210">Roomate</option>
        <option value="1">Self</option>
        <option value="58728">Self</option>
        <option value="58734">Sister</option>
        <option value="58752">Sister in law</option>
        <option value="58732">Son</option>
        <option value="58753">Son in law</option>
        <option value="58765">Sponsor to name a few</option>
        <option value="61332">Step-Brother</option>
        <option value="61333">Step-Daughter</option>
        <option value="61330">Step-Father</option>
        <option value="61329">Step-Mother</option>
        <option value="61331">Step-Sister</option>
        <option value="61334">Step-Son</option>
        <option value="58763">Teacher</option>
        <option value="58743">Uncle</option>
        <option value="58738">Wife</option>
      </select>
    </p>

    <div class="phone-field-group">
    <label for="cosRef1Phone">Cos Ref 1 Phone:</label>
    <input 
      type="text" 
      id="cosRef1Phone" 
      name="cosRef1Phone" 
      class="phoneField"
      placeholder="123-456-7890"
    >
  </div>
    </p>
    <h3>Cos #1 Reference # 2 </h3>
    <p>
    <p>
      <label for="cosRef2fName">FIRST:</label>
      <input type="text" id="cosRef2fName" name="cosRef2fName">
    </p>
    <p>
      <label for="cosRef2lName">LAST:</label>
      <input type="text" id="cosRef2lName" name="cosRef2lName">
    </p>

    <p>
      <label for="cosRef2City">CITY:</label>
      <input type="text" id="cosRef2City" name="cosRef2City">
    </p>

    <p>
      <label for="cosRef2State">STATE:</label>
      <input type="text" id="cosRef2State" name="cosRef2State">
    </p>

    <p>
      <label for="cosRef2Relation">RELATION:</label>
      <select id="cosRef2Relation" name="cosRef2Relation">
  <option value="0">---Select---</option>
        <option value="58759">Agent</option>
        <option value="58755">Attorney</option>
        <option value="58742">Aunt</option>
        <option value="58741">Boyfriend</option>
        <option value="58733">Brother</option>
        <option value="58749">Brother in law</option>
        <option value="62211">Child's Father</option>
        <option value="62212">Child's Mother</option>
        <option value="62205">Co-Worker</option>
        <option value="58744">Cousin</option>
        <option value="58731">Daughter</option>
        <option value="58754">Daughter in law</option>
        <option value="65532">Employee</option>
        <option value="58756">Employer</option>
        <option value="62207">Ex-Husband</option>
        <option value="62208">Ex-Partner</option>
        <option value="62206">Ex-Wife</option>
        <option value="58729">Father</option>
        <option value="58750">Father in law</option>
        <option value="65531">Fiance`</option>
        <option value="58735">Friend</option>
        <option value="58740">Girlfriend</option>
        <option value="62001">God Father</option>
        <option value="62000">God Mother</option>
        <option value="58745">Grand Daughter</option>
        <option value="58737">Grand Father</option>
        <option value="58736">Grand Mother</option>
        <option value="58746">Grand Son</option>
        <option value="61603">Great Aunt</option>
        <option value="61606">Great Granddaughter</option>
        <option value="61602">Great Grandfather</option>
        <option value="61601">Great Grandmother</option>
        <option value="61605">Great Grandson</option>
        <option value="61604">Great Uncle</option>
        <option value="62215">Half Brother</option>
        <option value="62216">Half Sister</option>
        <option value="58739">Husband</option>
        <option value="58758">Manager</option>
        <option value="58757">Manager Business</option>
        <option value="58730">Mother</option>
        <option value="58751">Mother in law</option>
        <option value="58747">Neice</option>
        <option value="65530">Neighbor</option>
        <option value="58748">Nephew</option>
        <option value="62209">Partner</option>
        <option value="58760">Pastor</option>
        <option value="58762">Priest</option>
        <option value="58764">Probation officer</option>
        <option value="58761">Rabbi</option>
        <option value="61328">Roomate</option>
        <option value="62210">Roomate</option>
        <option value="1">Self</option>
        <option value="58728">Self</option>
        <option value="58734">Sister</option>
        <option value="58752">Sister in law</option>
        <option value="58732">Son</option>
        <option value="58753">Son in law</option>
        <option value="58765">Sponsor to name a few</option>
        <option value="61332">Step-Brother</option>
        <option value="61333">Step-Daughter</option>
        <option value="61330">Step-Father</option>
        <option value="61329">Step-Mother</option>
        <option value="61331">Step-Sister</option>
        <option value="61334">Step-Son</option>
        <option value="58763">Teacher</option>
        <option value="58743">Uncle</option>
        <option value="58738">Wife</option>
      </select>
    </p>

    <div class="phone-field-group">
    <label for="cosRef2Phone">Cos Ref 2 Phone:</label>
    <input 
      type="text" 
      id="cosRef2Phone" 
      name="cosRef2Phone" 
      class="phoneField"
      placeholder="123-456-7890"
    >
  </div>
    
         <p><button type="submit">Submit</button></p>
  </form>

  <script src="script.js" defer></script>
</body>
</html>