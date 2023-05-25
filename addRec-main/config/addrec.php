<?php

if(isset($_POST['create'])){
    include "db_conn.php";

// Function to validate and sanitize input
function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Validate and sanitize form data
$status = validateInput($_POST['Stat']);
$firstName = validateInput($_POST['FirstName']);
$middleName = validateInput($_POST['MiddleName']);
$lastName = validateInput($_POST['LastName']);
$age = validateInput($_POST['Age']);
$gender = validateInput($_POST['Gender']);
$birthdate = validateInput($_POST['BirthDate']);
$idType = validateInput($_POST['IdType']);
$idnum = validateInput($_POST['IdNum']);
$issuedname = validateInput($_POST['IssuedName']);
$issuedstate = validateInput($_POST['IssuedState']);
$issuedate = isset($_POST['IssuedDate']) ? validateInput($_POST['IssuedDate']) : '';
$expirydate = validateInput($_POST['ExpiryDate']);
$addresstype = validateInput($_POST['AddressType']);
$nationality = validateInput($_POST['Nationality']);
$province = validateInput($_POST['Province']);
$city = validateInput($_POST['City']);
$street = validateInput($_POST['Street']);
$housenumber = validateInput($_POST['HouseNum']);
$fathername = validateInput($_POST['FatherName']);
$mothername = validateInput($_POST['MotherName']);
$emergencycontact = validateInput($_POST['EmergencyContNum']);
$nameofcontact = validateInput($_POST['ContactName']);
$relationship = validateInput($_POST['Relationship']);
$scnum = validateInput($_POST['ScNum']);
$bloodtype = isset($_POST['BloodType']) ? validateInput($_POST['BloodType']) : '';

// ... add more variables for other form fields

// Validate input
$errors = [];
if (empty($status)) {
    $errors[] = "Status is required.";
}

if (empty($firstName)) {
    $errors[] = "First name is required.";
}

if (empty($middleName)) {
    $errors[] = "Middle name is required.";
}

if (empty($lastName)) {
    $errors[] = "Last name is required.";
}

if (empty($age)) {
    $errors[] = "Age is required.";
}

if (empty($gender)) {
    $errors[] = "Gender is required.";
}

if (empty($birthdate)) {
    $errors[] = "Birth date is required.";
}

if (empty($idType)) {
    $errors[] = "ID type is required.";
}

if (empty($idnum)) {
    $errors[] = "ID Number is required.";
}

if (empty($issuedname)) {
    $errors[] = "Issued name is required.";
}

if (empty($issuedstate)) {
    $errors[] = "Issued state required.";
}

if (empty($issuedate)) {
    $errors[] = "Issued date is required.";
}

if (empty($expirydate)) {
    $errors[] = "Expiry Date is required.";
}

if (empty($addresstype)) {
    $errors[] = "Address type is required.";
}

if (empty($nationality)) {
    $errors[] = "Nationality is required.";
}

if (empty($province)) {
    $errors[] = "Province is required.";
}

if (empty($city)) {
    $errors[] = "City is required.";
}

if (empty($street)) {
    $errors[] = "Street is required.";
}

if (empty($housenumber)) {
    $errors[] = "House number is required.";
}

if (empty($fathername)) {
    $errors[] = "Father name is required.";
}

if (empty($mothername)) {
    $errors[] = "Mother name is required.";
}

if (empty($emergencycontact)) {
    $errors[] = "Emergency contact number is required.";
}

if (empty($nameofcontact)) {
    $errors[] = "Name of contact is required.";
}

if (empty($relationship)) {
    $errors[] = "Relationship is required.";
}

if (empty($scnum)) {
    $errors[] = "Senior citizen number is required.";
}

if (empty($bloodtype)) {
    $errors[] = "Blood type is required.";
}
// ... add validation rules for other fields

// Check for errors
if (!empty($errors)) {
    // Display errors and stop execution
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    $conn->close();
    exit();
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO tblscreg (Stat, FirstName, MiddleName, LastName, Age, Gender, BirthDate,
IdType, IdNum, IssuedName, IssuedState, IssuedDate, ExpiryDate, AddressType, Nationality, Province, 
City, Street, HouseNum, FatherName, MotherName, EmergencyContNum, ContactName, Relationship, ScNum, BloodType) 
VALUES ('$firstName', '$middleName', '$lastName', '$age', '$gender', '$birthdate', '$idType', '$idnum',
'$issuedname', '$issuedstate', '$issuedate' , '$expirydate', '$addresstype', '$nationality', '$province', '$city', '$street', 
'$housenumber', '$fathername', '$mothername', '$emergencycontact', '$nameofcontact', '$relationship', '$bloodtype')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}