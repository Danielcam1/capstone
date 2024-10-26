@extends('layouts.app')

@section('title', 'Fill Up Form')

@section('content')
<div class="container bg-light mb-5">
    <div class="card p-4">
        <form method="POST" action="{{ route('submit.fillup') }}">
            @csrf

            <!-- Personal Information -->
            <h2 class="mb-3">Personal Information</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Surname:</label>
                    <input type="text" name="surname" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>First Name:</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Middle Name:</label>
                    <input type="text" name="middle_name" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Name Extension:</label>
                    <select name="name_extension" class="form-control">
                        <option value="">None</option>
                        <option value="Jr">Jr</option>
                        <option value="Sr">Sr</option>
                        <option value="III">III</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Date of Birth (mm/dd/yyyy):</label>
                    <input type="date" name="birth_date" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Place of Birth:</label>
                    <input type="text" name="place_of_birth" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Sex:</label>
                    <select name="sex" class="form-control" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Civil Status:</label>
                    <select name="civil_status" class="form-control" required>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Height (m):</label>
                    <input type="text" name="height" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Weight (kg):</label>
                    <input type="text" name="weight" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Blood Type:</label>
                    <select name="blood_type" class="form-control" required>
                        <option value="null"></option>
                        <option value="O">O</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>GSIS ID No.:</label>
                    <input type="text" name="gsis_id_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>PAG-IBIG ID No.:</label>
                    <input type="text" name="pagibig_id_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>PhilHealth No.:</label>
                    <input type="text" name="philhealth_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>SSS No.:</label>
                    <input type="text" name="sss_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>TIN No.:</label>
                    <input type="text" name="tin_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Agency Employee No.:</label>
                    <input type="text" name="agency_employee_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Citizenship:</label>
                    <select name="citizenship" class="form-control" required>
                        <option value="Filipino">Filipino</option>
                        <option value="Dual">Dual</option>
                    </select>
                </div>
                <div class="col-md-8 mb-3">
                    <label>If Dual, indicate country:</label>
                    <input type="text" name="dual_citizenship_country" class="form-control">
                </div>
            </div>

            <!-- Residential Address -->
            <h3 class="mt-4">Residential Address</h3>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>House/Block/Lot No.:</label>
                    <input type="text" name="residential_house_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Street:</label>
                    <input type="text" name="residential_street" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Subdivision/Village:</label>
                    <input type="text" name="residential_subdivision" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Barangay:</label>
                    <input type="text" name="residential_barangay" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>City/Municipality:</label>
                    <input type="text" name="residential_city" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Province:</label>
                    <input type="text" name="residential_province" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Zip Code:</label>
                    <input type="text" name="residential_zip_code" class="form-control">
                </div>
            </div>

            <!-- Permanent Address -->
            <h3 class="mt-4">Permanent Address</h3>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>House/Block/Lot No.:</label>
                    <input type="text" name="permanent_house_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Street:</label>
                    <input type="text" name="permanent_street" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Subdivision/Village:</label>
                    <input type="text" name="permanent_subdivision" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Barangay:</label>
                    <input type="text" name="permanent_barangay" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>City/Municipality:</label>
                    <input type="text" name="permanent_city" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Province:</label>
                    <input type="text" name="permanent_province" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Zip Code:</label>
                    <input type="text" name="permanent_zip_code" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Telephone No.:</label>
                    <input type="text" name="telephone_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Mobile No.:</label>
                    <input type="text" name="mobile_no" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>E-mail Address:</label>
                    <input type="email" name="email_address" class="form-control">
                </div>
            </div>

                        <!-- Family Background -->
                        <h2 class="mt-4">Family Background</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Spouse's Surname:</label>
                    <input type="text" name="spouse_surname" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>First Name:</label>
                    <input type="text" name="spouse_first_name" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Middle Name:</label>
                    <input type="text" name="spouse_middle_name" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Name Extension:</label>
                    <select name="spouse_name_extension" class="form-control">
                        <option value="">None</option>
                        <option value="Jr">Jr</option>
                        <option value="Sr">Sr</option>
                        <option value="III">III</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Occupation:</label>
                    <input type="text" name="spouse_occupation" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Employer/Business Name:</label>
                    <input type="text" name="spouse_employer_name" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Business Address:</label>
                    <input type="text" name="spouse_business_address" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Telephone No.:</label>
                    <input type="text" name="spouse_telephone_no" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Father's Surname:</label>
                    <input type="text" name="father_surname" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Father's First Name:</label>
                    <input type="text" name="father_first_name" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Father's Middle Name:</label>
                    <input type="text" name="father_middle_name" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Father's Name Extension:</label>
                    <select name="father_name_extension" class="form-control">
                        <option value="">None</option>
                        <option value="Jr">Jr</option>
                        <option value="Sr">Sr</option>
                        <option value="III">III</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Mother's Maiden Surname:</label>
                    <input type="text" name="mother_maiden_surname" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Mother's First Name:</label>
                    <input type="text" name="mother_first_name" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Mother's Middle Name:</label>
                    <input type="text" name="mother_middle_name" class="form-control">
                </div>
            </div>

            <!-- Children's Information -->
            <h3 class="mt-4">Name of Children</h3>
            <div id="children_container">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" name="children_names[]" placeholder="Child's Name" class="form-control mb-2">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="date" name="children_birthdates[]" placeholder="Date of Birth" class="form-control">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-secondary mb-3" onclick="addChild()">Add Child</button>

            <!-- Educational Background -->
            <h2 class="mt-4">Educational Background</h2>

            <!-- Elementary -->
            <h3>Elementary</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name of School:</label>
                    <input type="text" name="elementary_school_name" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Basic Education/Degree/Course:</label>
                    <input type="text" name="elementary_degree" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (From):</label>
                    <input type="date" name="elementary_period_from" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (To):</label>
                    <input type="date" name="elementary_period_to" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Highest Level/Units Earned (if not graduated):</label>
                    <input type="text" name="elementary_units" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Year Graduated:</label>
                    <input type="text" name="elementary_year_graduated" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Scholarship/Academic Honors Received:</label>
                    <input type="text" name="elementary_honors" class="form-control">
                </div>
            </div>

            <!-- Secondary -->
            <h3>Secondary</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name of School:</label>
                    <input type="text" name="secondary_school_name" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Basic Education/Degree/Course:</label>
                    <input type="text" name="secondary_degree" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (From):</label>
                    <input type="date" name="secondary_period_from" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (To):</label>
                    <input type="date" name="secondary_period_to" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Highest Level/Units Earned (if not graduated):</label>
                    <input type="text" name="secondary_units" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Year Graduated:</label>
                    <input type="text" name="secondary_year_graduated" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Scholarship/Academic Honors Received:</label>
                    <input type="text" name="secondary_honors" class="form-control">
                </div>
            </div>

            <!-- Vocational/Trade Course -->
            <h3>Vocational/Trade Course</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name of School:</label>
                    <input type="text" name="vocational_school_name" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Basic Education/Degree/Course:</label>
                    <input type="text" name="vocational_degree" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (From):</label>
                    <input type="date" name="vocational_period_from" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (To):</label>
                    <input type="date" name="vocational_period_to" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Highest Level/Units Earned (if not graduated):</label>
                    <input type="text" name="vocational_units" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Year Graduated:</label>
                    <input type="text" name="vocational_year_graduated" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Scholarship/Academic Honors Received:</label>
                    <input type="text" name="vocational_honors" class="form-control">
                </div>
            </div>

            <!-- College -->
            <h3>College</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name of School:</label>
                    <input type="text" name="college_school_name" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Basic Education/Degree/Course:</label>
                    <input type="text" name="college_degree" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (From):</label>
                    <input type="date" name="college_period_from" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (To):</label>
                    <input type="date" name="college_period_to" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Highest Level/Units Earned (if not graduated):</label>
                    <input type="text" name="college_units" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Year Graduated:</label>
                    <input type="text" name="college_year_graduated" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Scholarship/Academic Honors Received:</label>
                    <input type="text" name="college_honors" class="form-control">
                </div>
            </div>

            <!-- Graduate Studies -->
            <h3>Graduate Studies</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name of School:</label>
                    <input type="text" name="graduate_school_name" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Basic Education/Degree/Course:</label>
                    <input type="text" name="graduate_degree" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (From):</label>
                    <input type="date" name="graduate_period_from" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Period of Attendance (To):</label>
                    <input type="date" name="graduate_period_to" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Highest Level/Units Earned (if not graduated):</label>
                    <input type="text" name="graduate_units" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Year Graduated:</label>
                    <input type="text" name="graduate_year_graduated" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Scholarship/Academic Honors Received:</label>
                    <input type="text" name="graduate_honors" class="form-control">
                </div>
            </div>

            <!-- Work Experience -->
            <h2 class="mt-4">Work Experience</h2>
            <div id="work_experience_container">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Inclusive Dates (From):</label>
                        <input type="date" name="work_dates[]" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Inclusive Dates (To):</label>
                        <input type="date" name="work_dates[]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Position Title:</label>
                        <input type="text" name="work_position[]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Department/Agency:</label>
                        <input type="text" name="work_department[]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Monthly Salary:</label>
                        <input type="text" name="work_salary[]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Salary Grade & Step Increment:</label>
                        <input type="text" name="work_salary_grade[]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Status of Appointment:</label>
                        <input type="text" name="work_status[]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Government Service (Y/N):</label>
                        <input type="text" name="work_gov_service[]" class="form-control">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-secondary mb-3" onclick="addWorkExperience()">Add Work Experience</button>

            <!-- JavaScript Functions for Adding Sections -->
            <script>
                function addChild() {
                    const container = document.getElementById('children_container');
                    if (container.children.length < 12) {
                        const childDiv = document.createElement('div');
                        childDiv.className = 'row';
                        childDiv.innerHTML = `
                            <div class="col-md-6 mb-3">
                                <input type="text" name="children_names[]" placeholder="Child's Name" class="form-control mb-2">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="date" name="children_birthdates[]" placeholder="Date of Birth" class="form-control">
                            </div>
                        `;
                        container.appendChild(childDiv);
                    }
                }

                function addWorkExperience() {
                    const container = document.getElementById('work_experience_container');
                    const workDiv = document.createElement('div');
                    workDiv.className = 'row mb-3';
                    workDiv.innerHTML = `
                        <div class="col-md-6 mb-3">
                            <label>Inclusive Dates (From):</label>
                            <input type="date" name="work_dates[]" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Inclusive Dates (To):</label>
                            <input type="date" name="work_dates[]" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Position Title:</label>
                            <input type="text" name="work_position[]" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Department/Agency:</label>
                            <input type="text" name="work_department[]" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Monthly Salary:</label>
                            <input type="text" name="work_salary[]" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Salary Grade & Step Increment:</label>
                            <input type="text" name="work_salary_grade[]" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Status of Appointment:</label>
                            <input type="text" name="work_status[]" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Government Service (Y/N):</label>
                            <input type="text" name="work_gov_service[]" class="form-control">
                        </div>
                    `;
                    container.appendChild(workDiv);
                }
            </script>

            <button type="submit" class="btn btn-primary mt-4 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection

