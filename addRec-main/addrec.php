
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="addrec.css" />

    <!----===== Iconscout CSS ===== -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <title>Regisration Form</title>
  </head>

  <body>
    <!-- navigation bar -->
    <nav class="nav">
      <a href="#" class="brand-name">Barangay 48, Pasay City</a>
      <ul class="nav-links">
        <!-- pabago nalang href -->
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Application</a></li>
        <li><a href="#">List</a></li>
      </ul>
      <img
        class="logo-png"
        href="#"
        src="/pasay-logo-small.png"
        alt="PasayLogo"
        id="brngyPic"
      />
    </nav>

    <div class="container">
      <header>Registration</header>

      <form action="config/addrec.php" method="post">
        <div class="form first">
          <div class="details personal">
            <span class="title">Personal Details</span>

            <div class="fields">
              <div class="input-field">
                <label>First Name</label>
                <input
                  type="FirstName"
                  name="FirstName"
                  placeholder="Enter your first name"
                  id="FirstName"
                  required
                  value="<?php echo isset($_GET['FirstName']) ? $_GET['FirstName'] : '';  ?>"
                />
              </div>

              <div class="input-field">
                <label>Middle Name</label>
                <input
                  type="text"
                  name="MiddleName"
                  placeholder="Enter middle name"
                  required
                  value="<?php echo isset($_GET['MiddleName']) ? $_GET['MiddleName'] : '';  ?>"
                />
              </div>

              <div class="input-field">
                <label>Last Name</label>
                <input
                  type="text"
                  placeholder="Enter your last name"
                  name="LastName"
                  required
                  value="<?php if(isset($_GET['LastName']))
                                echo ($_GET['LastName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Age</label>
                <input
                  type="number"
                  name="Age"
                  placeholder="Enter age"
                  required
                  value="<?php if(isset($_GET['Age']))
                                echo ($_GET['Age']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Gender</label>
                <select name = "Gender">
                  <option disabled selected>Select gender</option>
                  <option value="Male" <?php if(isset($_POST['Gender']) && $_POST['Gender'] === 'Male') echo 'selected'; ?>>Male</option>
                  <option value="Female" <?php if(isset($_POST['Gender']) && $_POST['Gender'] === 'Female') echo 'selected'; ?>>Female</option>
                  <option value="Others" <?php if(isset($_POST['Gender']) && $_POST['Gender'] === 'Others') echo 'selected'; ?>>Others</option>
                </select>
              </div>

              <div class="input-field">
                <label>Birth Date</label>
                <input
                  type="date"
                  name="BirthDate"
                  required
                  value="<?php if(isset($_GET['BirthDate']))
                                echo ($_GET['BirthDate']); ?>"
                />
              </div>
            </div>
          </div>
          <!-- di ko lang sure dito sa mga id so di ko muna nilagay yung php thingy -->
          <!-- part 2 -->
          <div class="details ID">
            <span class="title">Identity Details</span>

            <div class="fields">
              <div class="input-field">
                <label>ID Type</label>
                <select name = "IdType">
                  <option disabled selected>Select Valid ID</option>
                  <option value="Senior Citizen ID" <?php if(isset($_POST['IdType']) && $_POST['IdType'] === 'Senior Citizen ID') echo 'selected'; ?>>Senior Citizen ID</option>
                  <option value="Drivers License" <?php if(isset($_POST['IdType']) && $_POST['IdType'] === 'Drivers License') echo 'selected'; ?>>Driver's License</option>
                  <option value="Passport" <?php if(isset($_POST['IdType']) && $_POST['IdType'] === 'Passport') echo 'selected'; ?>>Passport</option>
                  <option value="SSS" <?php if(isset($_POST['IdType']) && $_POST['IdType'] === 'SSS') echo 'selected'; ?>>SSS</option>
                </select>
              </div>

              <div class="input-field">
                <label>ID Number</label>
                <input type="text" placeholder="Enter ID number"
                name="IdNum"
                required
                  value="<?php if(isset($_GET['IdNum']))
                                echo ($_GET['IdNum']); ?>"/>
              </div>

              <div class="input-field">
                <label>Issued Name</label>
                <input type="text" placeholder="Enter issued name" 
                name="IssuedName"
                required
                  value="<?php if(isset($_GET['IssuedName']))
                                echo ($_GET['IssuedName']); ?>"/>
              </div>

              <div class="input-field">
                <label>Issued State</label>
                <input type="text" placeholder="Enter issued state"
                name="IssuedState"
                required
                  value="<?php if(isset($_GET['IssuedState']))
                                echo ($_GET['IssuedState']); ?>"/>
              </div>

              <div class="input-field">
                <label>Issued Date</label>
                <input type="date" 
                name="IssuedDate"
                required
                  value="<?php if(isset($_GET['IssuedDate']))
                                echo ($_GET['IssuedDate']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Expiry Date</label>
                <input type="date" 
                name="ExpiryDate"
                required
                  value="<?php if(isset($_GET['ExpiryDate']))
                                echo ($_GET['ExpiryDate']); ?>"/>
              </div>
            </div>
          </div>
        </div>

        <!-- secondz -->
        <div class="form second">
          <div class="details address">
            <span class="title">Address Details</span>

            <div class="fields">
              <div class="input-field">
                <label>Address Type</label>
                <input
                  type="text"
                  name="AddressType"
                  placeholder="Permanent or Temporary"
                  value="<?php if(isset($_GET['AddressType']))
                                echo ($_GET['AddressType']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Nationality</label>
                <input
                  type="text"
                  name="Nationality"
                  placeholder="Enter nationality"
                  value="<?php if(isset($_GET['Nationality']))
                                echo ($_GET['Nationality']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Province</label>
                <input
                  type="text"
                  name="Province"
                  placeholder="Enter your province"
                  value="<?php if(isset($_GET['Province']))
                                echo ($_GET['Province']); ?>"
                />
              </div>

              <div class="input-field">
                <label>City</label>
                <input
                  type="text"
                  name="City"
                  placeholder="Enter your city"
                  value="<?php if(isset($_GET['City']))
                                echo ($_GET['City']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Street</label>
                <input
                  type="number"
                  name="Street"
                  placeholder="Enter block street name"
                  value="<?php if(isset($_GET['Street']))
                                echo ($_GET['Street']); ?>"
                />
              </div>

              <div class="input-field">
                <label>House Number</label>
                <input
                  type="number"
                  name="HouseNum"
                  placeholder="Enter house number"
                  value="<?php if(isset($_GET['HouseNum']))
                                echo ($_GET['HouseNum']); ?>"
                />
              </div>
            </div>
          </div>

          <div class="details family">
            <span class="title">Emergency Contact</span>

            <div class="fields">
              <div class="input-field">
                <label>Father Name</label>
                <input
                  type="text"
                  name="FatherName"
                  placeholder="Enter father name"
                  value="<?php if(isset($_GET['FatherName']))
                                echo ($_GET['FatherName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Mother Name</label>
                <input
                  type="text"
                  name="MotherName"
                  placeholder="Enter mother name"
                  value="<?php if(isset($_GET['MotherName']))
                                echo ($_GET['MotherName']); ''; ?>"
                />
              </div>

              <div class="input-field">
                <label>Emergency Contact Number</label>
                <input
                  type="text"
                  name="EmergencyContNum"
                  placeholder="Enter contact number"
                  value="<?php if(isset($_GET['EmergencyContNum']))
                                echo ($_GET['EmergencyContNum']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Name of Contact</label>
                <input
                  type="text"
                  name="ContactName"
                  placeholder="Enter name of contact"
                  value="<?php if(isset($_GET['ContactName']))
                                echo ($_GET['ContactName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Relationship</label>
                <input
                  type="text"
                  name="Relationship"
                  placeholder="Enter relationship"
                  value="<?php if(isset($_GET['Relationship']))
                                echo ($_GET['Relationship']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Blood Type</label>
                <input
                  type="text"
                  name="BloodType"
                  placeholder="Enter blood type"
                  value="<?php if(isset($_GET['BloodType']))
                                echo ($_GET['BloodType']); ?>"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="form third">
          <div class="details ID">
            <span class="title">Identification</span>

<script>
function previewImage(event) {
  var input = event.target;
  var preview = document.getElementById("image-preview");

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.style.display = "block";
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>

          <div class="buttons">
            <button class="sumbit" name="create">
              <span class="btnText">Submit</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
