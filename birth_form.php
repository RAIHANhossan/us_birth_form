<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- css style link -->
    <link rel="stylesheet" href="css/style1.css">

    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    

</head>
<body>
    
<header>
  <div class="container bg-white pb-3">
    <div><h1 class="text-capitalize fs-3 pt-4 ps-2">U.S Standard Certificate of Live Birth</h1></div>
    <!-- Nav tabs -->
    <form action="">
        <ul class="nav nav-tabs px-3" id="myTab" role="tablist">
          <li class="nav-item nav_font" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">about</button>
          </li>
        </ul>

        <!-- All links content below -->
        <div class="tab-content">
          <!-- the home section elements div -->
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="fex_container">

            <!-- left side conainer -->
              <div class="left_container">
                <h2 class="fs-5">Child's Details</h2>

                <!-- child First name and middle name -->
                <div class="input_two_side">
                  <div>
                    <label for="child_first_name">First Name</label><br>
                    <input type="text" id="child_first_name" name="child_first_name">
                  </div>
                  <div>
                    <label for="child_middle_name">Middle Name</label><br>
                    <input type="text" id="child_middle_name" name="child_middle_name">
                  </div>
                </div>

                <!-- child last name and suffix -->
                <div class="input_two_side">
                  <div>
                    <label for="child_last_name">Last Name</label><br>
                    <input type="text" id="child_last_name" name="child_last_name">
                  </div>
                  <div>
                    <label for="child_suffix_name">Suffix Name</label><br>
                    <input type="text" id="child_suffix_name" name="child_suffix_name">
                  </div>
                </div>

                <!-- child time of birth -->
                <div class="input_one_side">
                    <label for="time_of_birth">Time of Birth(24hr)</label><br>
                    <input type="time" name="child_time_of_birth">
                </div>

                <!-- sex and date of birth -->
                <div class="input_two_side">
                  <div>
                    <label for="child_sex_name">Sex</label><br>
                    <input type="text" id="child_sex_name" name="child_sex_name">
                  </div>
                  <div>
                    <label for="child_data of_birth">Date of birth (Mo/Day/YY)</label><br>
                    <input type="date" id="child_data of_birth" name="child_data of_birth">
                  </div>
                </div>

                <!-- Facalty name (if no institution, give street and number) -->
                <div class="input_one_side">
                    <label for="facalty_name">Facalty Name (if not institution, give street and number)</label><br>
                    <input type="text" name="facalty_name">
                </div>

                <!-- city, Town, or location of Birth -->
                <div class="input_one_side">
                    <label for="city_town_location_of_birth">City, Town, or Location of Birth</label><br>
                    <input type="text" name="city_town_location_of_birth">
                </div>

                <!-- country of birth -->
                <div class="input_one_side">
                    <label for="country_of_birth">Country of Birth</label><br>
                    <input type="text" name="country_of_birth">
                </div>

                <!-- Father's detail -->
                <h2 class="fs-5 my-4">Father's Details</h2>
                <p class="mb-1" style="font-size: 13px; font-weight: 600; text-transform: uppercase;">Father's current legal name</p>
                
                <!-- Father first adn middle name -->
                <div class="input_two_side">
                  <div>
                    <label for="father_first_name">First name</label><br>
                    <input type="text" id="father_first_name" name="father_first_name">
                  </div>
                  <div>
                    <label for="father_middle_name">Middle name</label><br>
                    <input type="text" id="father_middle_name" name="father_middle_name">
                  </div>
                </div>
                
                <!-- Father last name and suffix -->
                <div class="input_two_side">
                  <div>
                    <label for="father_last_name">Last name</label><br>
                    <input type="text" id="father_last_name" name="father_last_name">
                  </div>
                  <div>
                    <label for="father_suffix">Suffix</label><br>
                    <input type="text" id="father_suffix" name="father_suffix">
                  </div>
                </div>
                
                <!-- Fater date of birth -->
                <div class="input_one_side">
                    <label for="father_date_of_birth">Date of Birth</label><br>
                    <input type="date" name="father_date_of_birth">
                </div>
                                
                <!-- Fater birth place(state, teritory, or foreign country) -->
                <div class="input_one_side">
                    <label for="father_birth_place">Birthplace (State, Teritory, or Foreign Country)</label><br>
                    <input type="text" name="father_birth_place">
                </div>

                <!-- Certifier Details -->
                <h2 class="fs-5 my-4">Certifier Details</h2>
                                
                <!-- Certifier name -->
                <div class="input_one_side">
                    <label for="certifier_name">Certifier's name</label><br>
                    <input type="text" name="certifier_name">
                </div>

                <!-- Check box -->
                <div class="check_box">
                  <p>Title</p>
                  <div class="form-check form-check-inline mb-2">
                      <input class="form-check-input" type="checkbox" id="md" value="md">
                      <label class="form-check-label" for="md" style="font-size: 13px; font-weight:600;">MD</label>
                  </div>
                  <div class="form-check form-check-inline mb-2">
                      <input class="form-check-input" type="checkbox" id="do" value="do">
                      <label class="form-check-label" for="do" style="font-size: 13px; font-weight:600;">DO</label>
                  </div>
                  <div class="form-check form-check-inline mb-2">
                      <input class="form-check-input" type="checkbox" id="hospital_admin" value="hospital_admin">
                      <label class="form-check-label" for="hospital_admin" style="font-size: 13px; font-weight:600;">HOSPITAL ADMIN</label>
                  </div>
                  <div class="form-check form-check-inline mb-2">
                      <input class="form-check-input" type="checkbox" id="cnm_cm" value="cnm_cm">
                      <label class="form-check-label" for="cnm_cm" style="font-size: 13px; font-weight:600;">CNM/CM</label>
                  </div>
                  <div class="form-check form-check-inline mb-2">
                      <input class="form-check-input" type="checkbox" id="other_midwife" value="other_midwife">
                      <label class="form-check-label" for="other_midwife" style="font-size: 13px; font-weight:600;">OTHER MIDWIFE</label>
                  </div>
                  <br>
                  <div class="form-check form-check-inline" style="width:100%;">
                      <input class="form-check-input" type="checkbox" id="other_specify" value="other_specify">
                      <label class="form-check-label" for="other_specify" style="font-size: 13px; font-weight:600;">OTHER (SPECIFY)</label>
                  </div>
                  <input type="text" name="other_specify" style="width:100%" class="mb-3">
                </div>
                                
                <!-- Date of certified -->
                <div class="input_two_side">
                  <div>
                    <label for="date_of_certified">Date Certified (Mo/Day/YY)</label><br>
                    <input type="date" id="date_of_certified" name="date_of_certified">
                  </div>
                  <div>
                    <label for="date_filed_by_register">Date Field by Register (Mo/Day/YY)</label><br>
                    <input type="date" id="date_filed_by_register" name="date_filed_by_register">
                  </div>
                </div>
                                                
                <!-- Telephone -->
                <div class="input_one_side mt-4">
                    <label for="telephone">Telephone</label><br>
                    <input type="text" name="telephone">
                </div>
                                                
                <!-- UR# -->
                <div class="input_one_side">
                    <label for="ur#">UR#</label><br>
                    <input type="text" name="ur#">
                </div>
                                                
                <!-- Refering hospital -->
                <div class="input_one_side">
                    <label for="refering_hospital">Refering hospital</label><br>
                    <input type="text" name="refering_hospital">
                </div>



              </div>


              <!-- right side container -->
              <div class="right_container">
                <h2 class="fs-5">Mother's Details</h2>
                <p class="mb-1" style="font-size: 13px; font-weight: 600; text-transform: uppercase;">Mother's Current Legal Name</p>
                                
                <!-- Mother first and middle name -->
                <div class="input_two_side">
                  <div>
                    <label for="mother_first_name">First name</label><br>
                    <input type="text" id="mother_first_name" name="mother_first_name">
                  </div>
                  <div>
                    <label for="mother_middle_name">Middle name</label><br>
                    <input type="text" id="mother_middle_name" name="mother_middle_name">
                  </div>
                </div>

                <!-- Mother last and suffix name -->
                <div class="input_two_side">
                  <div>
                    <label for="mother_last_name">Last name</label><br>
                    <input type="text" id="mother_last_name" name="mother_last_name">
                  </div>
                  <div>
                    <label for="mother_suffix">Suffix</label><br>
                    <input type="text" id="mother_suffix" name="mother_suffix">
                  </div>
                </div>
                
                <!-- Mother date of birth -->
                <div class="input_one_side">
                    <label for="mother_date_of_birth">Date of Birth (Mo/Day/YY)</label><br>
                    <input type="date" name="mother_date_of_birth">
                </div>

                <p class="mt-5 mb-2" style="font-size: 13px; font-weight: 600; text-transform: uppercase;">Mother's Name Prior to First Marriage</p>
                                                
                <!-- Mother first and middle name -->
                <div class="input_two_side">
                  <div>
                    <label for="prior_mother_first_name">First name</label><br>
                    <input type="text" id="prior_mother_first_name" name="prior_mother_first_name">
                  </div>
                  <div>
                    <label for="prior_mother_middle_name">Middle name</label><br>
                    <input type="text" id="prior_mother_middle_name" name="prior_mother_middle_name">
                  </div>
                </div>

                <!-- Mother last and suffix name -->
                <div class="input_two_side">
                  <div>
                    <label for="prior_mother_last_name">Last name</label><br>
                    <input type="text" id="prior_mother_last_name" name="prior_mother_last_name">
                  </div>
                  <div>
                    <label for="prior_mother_suffix">Suffix</label><br>
                    <input type="text" id="prior_mother_suffix" name="prior_mother_suffix">
                  </div>
                </div>
                                
                <!-- Mother birth place -->
                <div class="input_one_side">
                    <label for="mother_birth_place">Birthplace (State, Territory, or Foreign Country)</label><br>
                    <input type="text" name="mother_birth_place" id="mother_birth_place">
                </div>
                                
                <!-- Mother residence of her state -->
                <div class="input_one_side">
                    <label for="residence_of_mother_state">Residence of Mother-State</label><br>
                    <input type="text" name="residence_of_mother_state" id="residence_of_mother_state">
                </div>
                                
                <!-- mother country name -->
                <div class="input_one_side">
                    <label for="mother_country_name">Country</label><br>
                    <input type="text" name="mother_country_name" id="mother_country_name">
                </div>
                                
                <!-- mother city, town or location -->
                <div class="input_one_side">
                    <label for="mother_city_town_location">City, Town, or Location</label><br>
                    <input type="text" name="mother_city_town_location" id="mother_city_town_location">
                </div>
                                
                <!-- Street and Number -->
                <div class="input_one_side">
                    <label for="street_number">Street and Number</label><br>
                    <input type="text" name="street_number" id="street_number">
                </div>
                                
                <!-- Apartment no -->
                <div class="input_one_side">
                    <label for="apartment_no">Apartment No</label><br>
                    <input type="text" name="apartment_no" id="apartment_no">
                </div>
                
                <!-- Mother location zip code and inside city limits -->
                <div class="input_two_side">
                  <div>
                    <label for="zip_code">Zip Code</label><br>
                    <input type="text" id="zip_code" name="zip_code">
                  </div>
                  <div>
                    <label for="city_limit_label">Inside City Limits</label><br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                      <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no">
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">this is profile section</div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">this is message section</div>
          <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">this is setting section</div>
          <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab">this is about section</div>
        </div>
    </form>
  </div>
  
</header>



<!-- <script src="js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>