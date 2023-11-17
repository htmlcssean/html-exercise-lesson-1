<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Personal Data Sheet</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Your custom CSS styles (if any) -->
    <style>
        .text-centermb4 {
            font-size: 40px;
            text-align: center;
            font-weight: bold;
        }

        .person {
            font-size: 20px;
        }

        .row1 {
            margin-bottom: 15px;
        }

        .f1,
    .secondary {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 5px;
    }

    .tertiary {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 5px;
        margin: 0 auto; /* Center-align the TERTIARY fieldset */
        max-width: 600px; /* Limit the width of the TERTIARY fieldset */
    }


        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-left: 10px;
        }

        .form-group {
            flex: 0 0 48%;
            margin-right: 2%;
        }

        .warning {
            font-style: italic;
        }

        .warning2 {
            font-size: 15px;
        }

        fieldset.secondary,
        fieldset.tertiary {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        legend.secondary,
        legend.tertiary {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        /* ... (your existing styles) */

        .two-row-setup {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .two-row-setup .input_wrap {
            flex: 0 0 48%;
            margin-right: 2%;
        }

        .two-row-setup .input_wrap label {
            flex: 0 0 30%;
        }

        .two-row-setup .input_wrap input,
        .two-row-setup .input_wrap select {
            flex: 0 0 70%;
            margin-right: 0;
        }

        .nxb{

            margin-left:494px;
        }



    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-centermb4">Personal Data Sheet</h1>
        <div class="row1" style="background-color: lightblue; padding-left: 10px; padding-top: 8px">
            <h2 class="person">Personal Information</h2>
            <p class="warning2"><span class="warning">WARNING</span>: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</p>
        </div>

        <fieldset class="f1">
            <form class="primary1">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">FIRST NAME</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter your FIRST NAME">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName">NAME EXTENSION (JR, SR)</label>
                        <input type="text" class="form-control" id="lastName" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">MIDDLE NAME</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your MIDDLE NAME">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">CONTACT NUMBER</label>
                        <input type="tel" class="form-control" id="phone" placeholder="ENTER YOUR CONTACT NUMBER">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">SURNAME</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter your SURNAME">
                </div>  <!-- ... (your existing content for the first fieldset) -->
            </form>
        </fieldset>

        <fieldset class="secondary">
            <legend>SECONDARY</legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="birthdate">DATE OF BIRTH</label>
                    <input type="date" name="birthdate" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="birthplace">PLACE OF BIRTH</label>
                    <input type="text" name="birthplace" class="form-control" id="birthplace">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sex">SEX</label>
                    <select name="sex" class="form-control" required>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="civil_status">CIVIL STATUS</label>
                    <select name="civil_status" class="form-control" required>
                        <option value="SINGLE">SINGLE</option>
                        <option value="MARRIED">MARRIED</option>
                        <option value="WIDOWED">WIDOWED</option>
                        <option value="SEPARATED">SEPARATED</option>
                        <option value="DIVORCED">DIVORCED</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="height">HEIGHT(m)</label>
                    <input type="number" name="height" class="form-control" id="height" value="1.5">
                </div>
                <div class="form-group col-md-6">
                    <label for="weight">WEIGHT(kg)</label>
                    <input type="number" name="weight" class="form-control" id="weight" value="50">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="blood_type">BLOOD TYPE</label>
                    <select name="blood_type" class="form-control" required>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="gsis_id">GSIS ID NO.</label>
                    <input type="text" name="gsis_id" id="gsis_id" class="form-control" placeholder="N/A">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pagibig_id">PAG-IBIG ID NO.</label>
                    <input type="text" name="pagibig_id" id="pagibig_id" class="form-control" placeholder="N/A">
                </div>
                <div class="form-group col-md-6">
                    <label for="philhealth_id">PHILHEALTH NO.</label>
                    <input type="text" name="philhealth_id" id="philhealth_id" class="form-control" placeholder="N/A">
                </div>
                <div class="form-group col-md-6">
                    <label for="sss_id">SSS NO.</label>
                    <input type="text" name="sss_id" id="sss_id" class="form-control" placeholder="N/A">
                </div>
                <div class="form-group col-md-6">
                    <label for="tin_id">TIN NO.</label>
                    <input type="text" name="tin_id" id="tin_id" class="form-control" placeholder="N/A">
                </div>
                <div class="form-group col-md-6">
                    <label for="agency_employee_no">AGENCY EMPLOYEE NO.</label>
                    <input type="text" name="agency_employee_no" id="agency_employee_no" class="form-control" placeholder="N/A">
                </div>
                <div class="form-group col-md-6">
                    <label for="citizenship">CITIZENSHIP</label>
                    <input type="text" id="citizenship" class="form-control" required>
                </div>
            </div>
            <div class="form-row center-btn">
  <!-- Centered button -->
  <div class="nxb">
    <button type="button" class="btn btn-primary" id="nextButton">Next</button>
  </div>
</div>
        <!-- ... (your existing content) -->
    </div>
    <fieldset class="tertiary">
    <legend>TERTIARY</legend>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="residential_addr">RESIDENTIAL ADDRESS</label>
            <input type="text" name="residential_addr" id="residential_addr" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label for="residential_addr_street">STREET</label>
            <input type="text" name="residential_addr_street" id="residential_addr_street" class="form-control" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="residential_addr_subdivision">SUBDIVISION/VILLAGE</label>
            <input type="text" name="residential_addr_subdivision" id="residential_addr_subdivision" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label for="residential_addr_barangay">BARANGAY</label>
            <input type="text" name="residential_addr_barangay" id="residential_addr_barangay" class="form-control" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="residential_addr_city">CITY/MUNICIPALITY</label>
            <input type="text" name="residential_addr_city" id="residential_addr_city" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label for="residential_addr_province">PROVINCE</label>
            <input type="text" name="residential_addr_province" id="residential_addr_province" class="form-control" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="mobile_no">MOBILE NO.</label>
            <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="N/A">
        </div>
        <div class="form-group col-md-6">
            <label for="residential_addr_zipcode">ZIP CODE</label>
            <input type="text" name="residential_addr_zipcode" id="residential_addr_zipcode" class="form-control" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="telephone_no">TELEPHONE NO.</label>
            <input type="text" name="telephone_no" id="telephone_no" class="form-control" placeholder="N/A">
        </div>
        <div class="form-group col-md-6">
            <label for="email">EMAIL ADDRESS</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="N/A">
        </div>
    </div>
    <div class="form-row">
    <!-- Centered buttons -->
    <div class="col-md-12 text-center">
        <button type="button" class="btn btn-secondary" id="backButton">Back</button>
        <button type="button" class="btn btn-primary" id="nextButton">Next</button>
    </div>
</div>

<!-- JavaScript -->
<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Find the relevant elements
    var containerDiv = document.querySelector('.container');
    var f1Fieldset = document.querySelector('.f1');
    var secondaryForm = document.querySelector('.secondary');
    var tertiaryForm = document.querySelector('.tertiary');
    var nextButton = document.getElementById('nextButton');
    var backButton = document.getElementById('backButton');

    // Hide the TERTIARY FORM, f1Fieldset, and containerDiv initially
    tertiaryForm.style.display = 'none';
    f1Fieldset.style.display = 'block'; // Adjust to 'none' if you want to hide it initially
    containerDiv.style.display = 'block'; // Adjust to 'none' if you want to hide it initially

    // Add click event listener to the Next button
    nextButton.addEventListener('click', function () {
        // Hide the containerDiv
        containerDiv.style.display = 'none';
        // Hide the f1Fieldset
        f1Fieldset.style.display = 'none';
        // Hide the SECONDARY FORM
        secondaryForm.style.display = 'none';
        // Show the TERTIARY FORM
        tertiaryForm.style.display = 'block';
    });

    // Add click event listener to the Back button
    backButton.addEventListener('click', function () {
        // Show the containerDiv
        containerDiv.style.display = 'block';
        // Show the f1Fieldset
        f1Fieldset.style.display = 'block';
        // Hide the TERTIARY FORM
        tertiaryForm.style.display = 'none';
        // Show the SECONDARY FORM
        secondaryForm.style.display = 'block';
    });
});
</script>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </div>
</body>

</html>
